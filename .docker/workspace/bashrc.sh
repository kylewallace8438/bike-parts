# Always show who we are, so a stale container is obvious the moment you exec.
# shellcheck shell=bash

export PS1='\[\033[01;32m\]\u@workspace\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]\$ '

if [ -t 1 ] && [ -z "${WORKSPACE_MOTD_SHOWN:-}" ]; then
  export WORKSPACE_MOTD_SHOWN=1
  echo ""
  echo -e "\033[1;36m== Workspace container ==\033[0m"
  echo -e " Running as: \033[1;33m$(id -un) ($(id -u):$(id -g))\033[0m"
  echo -e " Project dir: \033[1;33m${PWD}\033[0m"
  if [ "$(id -u)" = "0" ]; then
    echo -e " \033[1;31mWARNING: you are ROOT inside the container.\033[0m"
    echo -e " \033[1;31mFiles you write will be owned by root, forcing sudo edits in your host editor.\033[0m"
    echo -e " \033[1;33mFix:  docker compose up -d --force-recreate workspace  (rebuilds image with UID 1000).\033[0m"
  fi
  echo ""
fi
