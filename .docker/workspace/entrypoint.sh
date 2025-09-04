#!/bin/bash
set -e

# Wait for database to be ready
echo "Waiting for database connection..."
until php artisan tinker --execute="DB::connection()->getPdo();" > /dev/null 2>&1; do
    echo "Database not ready, waiting..."
    sleep 2
done

echo "Database is ready!"

# Run migrations
echo "Running database migrations..."
php artisan migrate --force

# Install frontend dependencies if node_modules doesn't exist or package.json is newer
echo "Checking frontend dependencies..."
cd frontend
if [ ! -d "node_modules" ] || [ "package.json" -nt "node_modules/.package-lock.json" ]; then
    echo "Installing/updating frontend dependencies..."
    npm install
fi

# Start frontend development server in background
echo "Starting frontend development server..."
npm run dev &
FRONTEND_PID=$!
cd ..

# Function to handle shutdown
cleanup() {
    echo "Shutting down..."
    kill $FRONTEND_PID 2>/dev/null || true
    exit 0
}

# Set up signal handlers
trap cleanup SIGTERM SIGINT

echo "Workspace is ready!"
echo "Frontend dev server is running on http://localhost:5173"
echo "You can now edit files in the frontend/ directory and see changes in real-time"

# Keep the container running and forward signals
wait $FRONTEND_PID
