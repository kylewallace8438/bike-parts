# Database Import Guide

This guide provides multiple ways to import the `reverb_demo.sql` file into your bike-parts database.

## Prerequisites

1. Ensure Docker and Docker Compose are installed
2. Make sure you have a `.env` file (copy from `.env.example` if needed)
3. Start your Docker services: `docker compose up -d`

## Import Methods

### Method 1: Using Makefile (Recommended)

```bash
# Simple import
make db-import

# Fresh import (drops all tables first, runs migrations, then imports)
make db-import-fresh

# Create a backup
make db-backup
```

### Method 2: Using the Bash Script (Linux/WSL)

```bash
# Make the script executable
chmod +x scripts/import-db.sh

# Simple import
./scripts/import-db.sh

# Fresh import with backup
./scripts/import-db.sh --backup --fresh

# Import a different SQL file
./scripts/import-db.sh --sql path/to/your/file.sql
```

### Method 3: Using the Windows Batch Script

```cmd
# Simple import
scripts\import-db.bat

# Fresh import with backup
scripts\import-db.bat backup fresh

# Show help
scripts\import-db.bat help
```

### Method 4: Using Laravel Artisan Command

```bash
# Simple import
docker compose exec workspace php artisan db:import

# Fresh import with backup
docker compose exec workspace php artisan db:import --fresh --backup

# Import a different file
docker compose exec workspace php artisan db:import custom.sql --fresh
```

### Method 5: Manual Docker Command

```bash
# Direct import
docker compose exec -T mysql mysql -u root -p${DB_PASSWORD} ${DB_DATABASE} < .docker/mysql/reverb_demo.sql

# With environment variables loaded
source .env
docker compose exec -T mysql mysql -u root -p"$DB_PASSWORD" "$DB_DATABASE" < .docker/mysql/reverb_demo.sql
```

## What's in the SQL File

The `reverb_demo.sql` file contains:
- **bike_models**: KTM motorcycle models (Duke, RC series)
- **bike_parts**: Comprehensive parts catalog with prices
- **brands**: Motorcycle brands
- **categories**: Part categories
- **products**: Product information

## Troubleshooting

### Common Issues

1. **MySQL service not running**
   ```bash
   docker compose up -d mysql
   ```

2. **Permission denied on scripts**
   ```bash
   chmod +x scripts/import-db.sh
   ```

3. **Environment variables not loaded**
   - Ensure your `.env` file exists
   - Check that `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` are set

4. **SQL file not found**
   - Verify the file exists at `.docker/mysql/reverb_demo.sql`
   - Check file permissions

### Verification

After import, verify the data:

```bash
# Check table count
docker compose exec mysql mysql -u root -p${DB_PASSWORD} -e "USE ${DB_DATABASE}; SHOW TABLES;"

# Check some data
docker compose exec mysql mysql -u root -p${DB_PASSWORD} -e "USE ${DB_DATABASE}; SELECT COUNT(*) FROM bike_parts;"
```

## Auto-Import on Container Startup

If you want the SQL file to be automatically imported when starting the MySQL container for the first time, the Docker Compose has been configured to mount the `.docker/mysql` directory. You can:

1. Rename your SQL file to `01-init.sql` in `.docker/mysql/`
2. This will be automatically executed on first container startup

## Backup Strategy

Always create backups before importing:

```bash
# Create timestamped backup
make db-backup

# Or manually
docker compose exec mysql mysqldump -u root -p${DB_PASSWORD} ${DB_DATABASE} > backup_$(date +%Y%m%d_%H%M%S).sql
```

## File Structure

```
.docker/mysql/
├── reverb_demo.sql          # Main SQL dump
└── backup_*.sql             # Generated backups

scripts/
├── import-db.sh             # Bash script for Linux/WSL
└── import-db.bat            # Windows batch script

app/Console/Commands/
└── ImportDatabase.php       # Laravel Artisan command
```
