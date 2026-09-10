#!/bin/bash
# Workspace container entrypoint.
# - If this container was somehow started as root (e.g. old image cached, or
#   user override in a one-off `docker compose run`), drop privileges to the
#   host-matching laravel (UID=PUID) user for the command so we never write
#   root-owned files into the /var/www bind mount.
# - If we're already running as the non-root user (the normal case), just exec.

set -e

PUID="${PUID:-1000}"
PGID="${PGID:-1000}"
USER_NAME="${USER_NAME:-laravel}"
GROUP_NAME="${GROUP_NAME:-laravel}"
APP_DIR="${APP_DIR:-/var/www}"

CURRENT_UID="$(id -u)"
CURRENT_GID="$(id -g)"

if [ "${CURRENT_UID}" = "0" ]; then
  # Sanity: ensure the user/group exists (they should from the Dockerfile).
  if ! getent group "${GROUP_NAME}" >/dev/null 2>&1; then
    groupadd -g "${PGID}" "${GROUP_NAME}" >/dev/null 2>&1 || true
  fi
  if ! id -u "${USER_NAME}" >/dev/null 2>&1; then
    useradd -u "${PUID}" -g "${GROUP_NAME}" -m -s /bin/bash "${USER_NAME}" >/dev/null 2>&1 || true
  fi

  # Best-effort one-time ownership fix on writable dirs (runs as root only when
  # we happen to be root). Idempotent and quick on a clean mount.
  if [ -d "${APP_DIR}/storage" ]; then
    chown -R "${PUID}:${PGID}" "${APP_DIR}/storage" 2>/dev/null || true
    find "${APP_DIR}/storage" -type d -exec chmod 775 {} \; 2>/dev/null || true
    find "${APP_DIR}/storage" -type f -exec chmod 664 {} \; 2>/dev/null || true
  fi
  if [ -d "${APP_DIR}/bootstrap/cache" ]; then
    chown -R "${PUID}:${PGID}" "${APP_DIR}/bootstrap/cache" 2>/dev/null || true
    find "${APP_DIR}/bootstrap/cache" -type d -exec chmod 775 {} \; 2>/dev/null || true
    find "${APP_DIR}/bootstrap/cache" -type f -exec chmod 664 {} \; 2>/dev/null || true
  fi

  # Drop to the unprivileged user for the actual command.
  export HOME="/home/${USER_NAME}"
  cd "${APP_DIR}" || true
  exec gosu "${PUID}:${PGID}" "$@"
fi

# Already running as the non-root (laravel) user — direct exec.
exec "$@"
