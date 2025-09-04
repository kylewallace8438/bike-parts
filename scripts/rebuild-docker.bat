@echo off
echo Stopping containers...
docker-compose down

echo Building containers...
docker-compose build --no-cache workspace php-fpm

echo Starting containers...
docker-compose up -d

echo Containers are starting up...
echo Frontend dev server will be available at http://localhost:5173
echo Database migrations will run automatically during startup
echo You can check the logs with: docker-compose logs -f workspace

pause
