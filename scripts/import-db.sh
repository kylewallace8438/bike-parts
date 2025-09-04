#!/bin/bash

# Database Import Script for Bike Parts Project
# Usage: ./scripts/import-db.sh [options]

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Default values
SQL_FILE=".docker/mysql/reverb_demo.sql"
FRESH_IMPORT=false
BACKUP_BEFORE=false

# Function to display usage
usage() {
    echo -e "${BLUE}Usage: $0 [OPTIONS]${NC}"
    echo ""
    echo "Options:"
    echo "  -f, --fresh       Drop all tables and import fresh (runs migrate:fresh first)"
    echo "  -b, --backup      Create backup before importing"
    echo "  -s, --sql FILE    Specify SQL file to import (default: $SQL_FILE)"
    echo "  -h, --help        Show this help message"
    echo ""
    echo "Examples:"
    echo "  $0                    # Simple import"
    echo "  $0 -f                 # Fresh import with migration"
    echo "  $0 -b -f              # Backup, then fresh import"
}

# Parse command line arguments
while [[ $# -gt 0 ]]; do
    case $1 in
        -f|--fresh)
            FRESH_IMPORT=true
            shift
            ;;
        -b|--backup)
            BACKUP_BEFORE=true
            shift
            ;;
        -s|--sql)
            SQL_FILE="$2"
            shift 2
            ;;
        -h|--help)
            usage
            exit 0
            ;;
        *)
            echo -e "${RED}Unknown option: $1${NC}"
            usage
            exit 1
            ;;
    esac
done

# Check if Docker Compose is running
echo -e "${BLUE}Checking Docker Compose services...${NC}"
if ! docker compose ps mysql | grep -q "running"; then
    echo -e "${RED}MySQL service is not running. Please start it with: docker compose up -d mysql${NC}"
    exit 1
fi

# Check if SQL file exists
if [[ ! -f "$SQL_FILE" ]]; then
    echo -e "${RED}SQL file not found: $SQL_FILE${NC}"
    exit 1
fi

# Load environment variables
if [[ -f .env ]]; then
    source .env
else
    echo -e "${YELLOW}Warning: .env file not found. Using default values.${NC}"
    DB_DATABASE=${DB_DATABASE:-"bike-parts"}
    DB_PASSWORD=${DB_PASSWORD:-""}
fi

echo -e "${GREEN}Configuration:${NC}"
echo -e "  Database: ${DB_DATABASE}"
echo -e "  SQL File: ${SQL_FILE}"
echo -e "  Fresh Import: ${FRESH_IMPORT}"
echo -e "  Backup Before: ${BACKUP_BEFORE}"
echo ""

# Create backup if requested
if [[ "$BACKUP_BEFORE" == true ]]; then
    echo -e "${BLUE}Creating backup...${NC}"
    BACKUP_FILE=".docker/mysql/backup_$(date +%Y%m%d_%H%M%S).sql"
    docker compose exec mysql mysqldump -u root -p"${DB_PASSWORD}" "${DB_DATABASE}" > "$BACKUP_FILE"
    echo -e "${GREEN}Backup created: $BACKUP_FILE${NC}"
fi

# Fresh import (run migrations first)
if [[ "$FRESH_IMPORT" == true ]]; then
    echo -e "${BLUE}Running fresh migrations...${NC}"
    docker compose exec workspace php artisan migrate:fresh --force
fi

# Import the SQL file
echo -e "${BLUE}Importing SQL file...${NC}"
docker compose exec -T mysql mysql -u root -p"${DB_PASSWORD}" "${DB_DATABASE}" < "$SQL_FILE"

echo -e "${GREEN}✅ Database import completed successfully!${NC}"

# Show table count
echo -e "${BLUE}Database summary:${NC}"
docker compose exec mysql mysql -u root -p"${DB_PASSWORD}" -e "USE ${DB_DATABASE}; SELECT COUNT(*) as 'Total Tables' FROM information_schema.tables WHERE table_schema = '${DB_DATABASE}';"

echo -e "${GREEN}Import process finished!${NC}"
