<!-- Copilot / AI assistant instructions for contributors working on the bike-parts repo -->

# bike-parts — Copilot Instructions

Purpose: help an AI coding assistant be immediately productive in this Laravel + Vue (Vite) monorepo.

- Stack: PHP (Laravel), MySQL (Docker), Vue 3 + Vite frontend, Yarn for frontend, Docker Compose for services.
- Key workflows: local dev via `make` (uses `docker compose`), DB imports via `.docker/mysql/reverb_demo.sql` or `scripts/import-db.*`.

Quick commands (project root):

- Install & run: `make install` (builds containers, runs `composer install` inside `app`).
- Run backend tests: `make test` (runs `php artisan test` inside app container).
- Run PHP linter: `make lint` (uses `./vendor/bin/pint`).
- DB import: `make db-import` or `make db-import-fresh` (uses `.docker/mysql/reverb_demo.sql`).
- Frontend dev: `yarn dev` (or `npm run dev`) to start Vite.

Where to look (high-value files & folders):

- `app/Services/ShopifyProductAdapter.php` — primary example of an adapter pattern used to map Shopify JSON -> `App\Models\Product`.
- `app/Shopify/ApiClient.php` — HTTP client for Shopify interactions.
- `app/Console/Commands/` — custom Artisan commands (DB import, Shopify import helpers).
- `app/Models/` — domain models: `Product.php`, `BikeModel.php`, `BikePart.php`, `RentalBike.php`, etc.
- `routes/api.php` — canonical list of API endpoints and middleware usage (`auth:sanctum`, admin middleware groups).
- `resources/app/components/` — Vue components and UI conventions (Vite build with `laravel-vite-plugin`).
- `docs/` — human-authored docs with actionable examples: `SHOPIFY_ADAPTER.md`, `DATABASE_IMPORT.md`, `BIKE_RENTAL_API.md`.

Project-specific patterns and rules (do not invent alternatives):

- Products from Shopify: `shopify_id` is used as the primary identifier (not the auto-increment ID). See `SHOPIFY_ADAPTER.md` and `app/Models/Product.php`.
- Several DB columns store JSON (e.g., `tags`, `images`, `variants`, `metafields`). Preserve JSON shape and use Laravel casting when modifying models.
- Slugs are generated with `Str::slug()` and rely on `title` when present. Avoid changing slug logic without checking existing `slug` usages.
- Adapter classes (e.g., `ShopifyProductAdapter`) expose methods like: `validateShopifyData`, `mapToProduct`, `createOrUpdateProduct`. Follow this signature style for new adapters.
- Artisan commands are the primary batch/CLI entry points for imports and background jobs — prefer adding a command over ad-hoc scripts for repeatable operations.

Integration & infra notes (do not change lightly):

- Database import: `.docker/mysql/reverb_demo.sql` is mounted into the MySQL container. Automated imports and backups are handled via `scripts/import-db.*` and Makefile targets.
- Docker Compose service names referenced in Makefile: `app` (PHP/Laravel) and `mysql` (DB). Use those service names when crafting `docker compose exec` commands.
- Frontend build uses Vite with `laravel-vite-plugin`. Assets live in `resources/app` and are built by `yarn build` / `yarn dev`.

Testing & verification tips:

- To run only the Shopify adapter tests: `php artisan test --filter ShopifyProductAdapterTest` (see `docs/SHOPIFY_ADAPTER.md`).
- To verify imported data exists after `db-import`: run `docker compose exec mysql mysql -u root -p${DB_PASSWORD} -e "SELECT COUNT(*) FROM products;" ${DB_DATABASE}`.

Important conventions to preserve:

- Preserve `shopify_id` semantics and JSON column structure when editing product import or migrations.
- Use `auth:sanctum` for API authentication; admin-only routes are grouped with `admin` middleware defined in `app/Http/Kernel.php` (may need registration).
- Use Artisan commands for repeatable maintenance tasks and data imports; avoid direct ad-hoc DB edits in code patches.

If unsure about a change, consult these docs first: `docs/SHOPIFY_ADAPTER.md`, `docs/DATABASE_IMPORT.md`, and `routes/api.php` — they capture intended behavior and operational commands.

If you need more context or want this tailored to a specific task (e.g., adding a new adapter, updating product mapping, or changing DB schema), say what you want to change and I will update these instructions with precise file-level guidance.
