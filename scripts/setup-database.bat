@echo off
echo Setting up Bike Parts Database...
echo.

echo 1. Running migrations...
php artisan migrate:fresh
if %errorlevel% neq 0 (
    echo Migration failed!
    pause
    exit /b 1
)

echo.
echo 2. Seeding database...
php artisan db:seed
if %errorlevel% neq 0 (
    echo Seeding failed!
    pause
    exit /b 1
)

echo.
echo 4. Displaying maintenance records...
php artisan tinker --execute="echo 'Total Maintenance Records: ' . App\Models\MaintenanceHistory::count(); echo PHP_EOL; echo 'Completed Maintenances: ' . App\Models\MaintenanceHistory::where('status', 'completed')->count(); echo PHP_EOL;"

echo.
echo ✅ Database setup completed successfully!
echo.
echo 📋 Quick test commands:
echo   php artisan tinker
echo   App\Models\MaintenanceHistory::all()
echo.
echo 🌐 API endpoints to test:
echo   GET /api/maintenance/plate/BIKE_001
echo   GET /api/maintenance/statistics/overview
echo.
pause
