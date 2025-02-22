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
