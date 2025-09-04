@echo off
REM Database Import Script for Bike Parts Project (Windows)
REM Usage: import-db.bat [fresh] [backup]

setlocal

set SQL_FILE=.docker/mysql/reverb_demo.sql
set FRESH_IMPORT=false
set BACKUP_BEFORE=false

REM Parse arguments
:parse_args
if "%1"=="fresh" (
    set FRESH_IMPORT=true
    shift
    goto :parse_args
)
if "%1"=="backup" (
    set BACKUP_BEFORE=true
    shift
    goto :parse_args
)
if "%1"=="help" (
    goto :usage
)
if not "%1"=="" (
    echo Unknown option: %1
    goto :usage
)

REM Load environment variables from .env file (simple version)
if exist .env (
    for /f "usebackq tokens=1,2 delims==" %%a in (.env) do (
        if "%%a"=="DB_DATABASE" set DB_DATABASE=%%b
        if "%%a"=="DB_PASSWORD" set DB_PASSWORD=%%b
    )
)

REM Set defaults if not found
if "%DB_DATABASE%"=="" set DB_DATABASE=bike-parts
if "%DB_PASSWORD%"=="" set DB_PASSWORD=

echo =====================================
echo   Database Import Script
echo =====================================
echo Database: %DB_DATABASE%
echo SQL File: %SQL_FILE%
echo Fresh Import: %FRESH_IMPORT%
echo Backup Before: %BACKUP_BEFORE%
echo =====================================
echo.

REM Check if Docker Compose is running
echo Checking Docker Compose services...
docker compose ps mysql | findstr "running" >nul
if errorlevel 1 (
    echo ERROR: MySQL service is not running. Please start it with:
    echo docker compose up -d mysql
    exit /b 1
)

REM Check if SQL file exists
if not exist "%SQL_FILE%" (
    echo ERROR: SQL file not found: %SQL_FILE%
    exit /b 1
)

REM Create backup if requested
if "%BACKUP_BEFORE%"=="true" (
    echo Creating backup...
    for /f "tokens=1-5 delims=/:. " %%d in ("%date% %time%") do set TIMESTAMP=%%f%%e%%d_%%g%%h
    set BACKUP_FILE=.docker/mysql/backup_%TIMESTAMP%.sql
    docker compose exec mysql mysqldump -u root -p%DB_PASSWORD% %DB_DATABASE% > "%BACKUP_FILE%"
    echo Backup created: %BACKUP_FILE%
)

REM Fresh import (run migrations first)
if "%FRESH_IMPORT%"=="true" (
    echo Running fresh migrations...
    docker compose exec workspace php artisan migrate:fresh --force
)

REM Import the SQL file
echo Importing SQL file...
docker compose exec -T mysql mysql -u root -p%DB_PASSWORD% %DB_DATABASE% < "%SQL_FILE%"

echo.
echo ✅ Database import completed successfully!
echo.

REM Show table count
echo Database summary:
docker compose exec mysql mysql -u root -p%DB_PASSWORD% -e "USE %DB_DATABASE%; SELECT COUNT(*) as 'Total Tables' FROM information_schema.tables WHERE table_schema = '%DB_DATABASE%';"

echo Import process finished!
goto :end

:usage
echo Usage: %0 [fresh] [backup] [help]
echo.
echo Options:
echo   fresh    - Drop all tables and import fresh (runs migrate:fresh first)
echo   backup   - Create backup before importing
echo   help     - Show this help message
echo.
echo Examples:
echo   %0                # Simple import
echo   %0 fresh          # Fresh import with migration
echo   %0 backup fresh   # Backup, then fresh import
exit /b 0

:end
endlocal
