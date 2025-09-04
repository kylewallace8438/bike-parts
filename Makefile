install:
	docker compose build
	docker compose up -d
	docker compose exec app composer install
migrate:
	docker compose exec app php artisan migrate
seed:
	docker compose exec app php artisan db:seed
lint:
	docker compose exec app ./vendor/bin/pint
lint-test:
	docker compose exec app ./vendor/bin/pint --test
test:
	docker compose exec app php artisan test

# Database import commands
db-import:
	docker compose exec mysql mysql -u root -p$${DB_PASSWORD} $${DB_DATABASE} < /var/lib/mysql-init/reverb_demo.sql

db-import-fresh:
	docker compose exec app php artisan migrate:fresh
	docker compose exec mysql mysql -u root -p$${DB_PASSWORD} $${DB_DATABASE} < /var/lib/mysql-init/reverb_demo.sql

db-backup:
	docker compose exec mysql mysqldump -u root -p$${DB_PASSWORD} $${DB_DATABASE} > .docker/mysql/backup_$$(date +%Y%m%d_%H%M%S).sql
