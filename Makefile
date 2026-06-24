install:
	docker compose build
	docker compose up -d
	docker compose exec workspace composer install
migrate:
	docker compose exec workspace php artisan migrate
seed:
	docker compose exec workspace php artisan db:seed
lint:
	docker compose exec workspace ./vendor/bin/pint
lint-test:
	docker compose exec workspace ./vendor/bin/pint --test
test:
	docker compose exec workspace php artisan test

# Database import commands
db-import:
	docker compose exec mysql mysql -u root -p$${DB_PASSWORD} $${DB_DATABASE} < /var/lib/mysql-init/reverb_demo.sql

db-import-fresh:
	docker compose exec workspace php artisan migrate:fresh
	docker compose exec mysql mysql -u root -p$${DB_PASSWORD} $${DB_DATABASE} < /var/lib/mysql-init/reverb_demo.sql

db-backup:
	docker compose exec mysql mysqldump -u root -p$${DB_PASSWORD} $${DB_DATABASE} > .docker/mysql/backup_$$(date +%Y%m%d_%H%M%S).sql
