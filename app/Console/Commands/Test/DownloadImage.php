<?php

namespace App\Console\Commands\Test;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DownloadImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:download-image';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = 'https://www.bike-parts-ktm.com/thumbs/ktm/img/4526/900_900/FRONT-BRAKE-CALIPER-KTM-MOTO-200-2022-DUKE-200-DUKE-orange-ABS-17.png';
        $contents = file_get_contents($url);
        $name = substr($url, strrpos($url, '/') + 1);
        Storage::disk()->put($name, $contents);
    }
}
