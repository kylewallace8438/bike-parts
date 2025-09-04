<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Process;

class ImportDatabase extends Command
{
    protected $signature = 'db:import {file?} {--fresh} {--backup}';
    protected $description = 'Import SQL file into the database';

    public function handle()
    {
        $sqlFile = $this->argument('file') ?? '.docker/mysql/reverb_demo.sql';
        $fresh = $this->option('fresh');
        $backup = $this->option('backup');

        // Check if file exists
        if (!file_exists(base_path($sqlFile))) {
            $this->error("SQL file not found: {$sqlFile}");
            return 1;
        }

        $this->info("Starting database import...");
        $this->info("SQL File: {$sqlFile}");
        $this->info("Fresh Import: " . ($fresh ? 'Yes' : 'No'));
        $this->info("Backup Before: " . ($backup ? 'Yes' : 'No'));

        try {
            // Create backup if requested
            if ($backup) {
                $this->createBackup();
            }

            // Fresh import
            if ($fresh) {
                $this->info('Running fresh migrations...');
                $this->call('migrate:fresh', ['--force' => true]);
            }

            // Import SQL file
            $this->importSqlFile($sqlFile);

            $this->info('✅ Database import completed successfully!');

            // Show summary
            $this->showDatabaseSummary();

        } catch (\Exception $e) {
            $this->error('Import failed: ' . $e->getMessage());
            return 1;
        }

        return 0;
    }

    private function createBackup()
    {
        $this->info('Creating backup...');

        $timestamp = now()->format('Ymd_His');
        $backupFile = ".docker/mysql/backup_{$timestamp}.sql";

        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $host = config('database.connections.mysql.host');

        $command = "mysqldump -h {$host} -u {$username} -p{$password} {$database}";

        $result = Process::run($command);

        if ($result->successful()) {
            file_put_contents(base_path($backupFile), $result->output());
            $this->info("Backup created: {$backupFile}");
        } else {
            $this->warn('Backup failed, continuing with import...');
        }
    }

    private function importSqlFile($sqlFile)
    {
        $this->info('Importing SQL file...');

        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $host = config('database.connections.mysql.host');

        $command = "mysql -h {$host} -u {$username} -p{$password} {$database}";

        $result = Process::run($command, input: file_get_contents(base_path($sqlFile)));

        if (!$result->successful()) {
            throw new \Exception('SQL import failed: ' . $result->errorOutput());
        }
    }

    private function showDatabaseSummary()
    {
        $this->info('Database summary:');

        $tableCount = DB::select("
            SELECT COUNT(*) as count
            FROM information_schema.tables
            WHERE table_schema = ?
        ", [config('database.connections.mysql.database')]);

        $this->info("Total tables: " . $tableCount[0]->count);

        // Show some key tables if they exist
        $keyTables = ['bike_models', 'bike_parts', 'brands', 'categories'];

        foreach ($keyTables as $table) {
            try {
                $count = DB::table($table)->count();
                $this->info("- {$table}: {$count} records");
            } catch (\Exception $e) {
                // Table doesn't exist, skip
            }
        }
    }
}
