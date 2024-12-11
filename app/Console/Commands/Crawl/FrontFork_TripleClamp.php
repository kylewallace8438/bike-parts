<?php

namespace App\Console\Commands\Crawl;

use App\Models\Crawl\ScrapeObserver;
use Spatie\Crawler\Crawler;

use Illuminate\Console\Command;

class FrontFork_TripleClamp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:front-fork_-triple-clamp';

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
        $url = 'https://www.bike-parts-ktm.com/ktm-motorcycle/390_MOTO/2016/DUKE/390-DUKE-WHITE-ABS/FRONT-FORK--TRIPLE-CLAMP/655/0/0/655';
        $scrapeObserver = new ScrapeObserver();
        Crawler::create()
            ->setMaximumDepth(0)
            ->setTotalCrawlLimit(1)
            ->setCrawlObserver($scrapeObserver)
            ->startCrawling($url);
        dd($scrapeObserver->getContent());
    }
}
