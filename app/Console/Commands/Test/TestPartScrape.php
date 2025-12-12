<?php

namespace App\Console\Commands\Test;

use App\Models\BikePart;
use App\Models\Brand;
use App\Models\BikePartCategory;
use App\Models\Crawl\KTMPartScrape;
use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;

class TestPartScrape extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-part-scrape';

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
        $ktm_brand = Brand::where('slug', 'ktm')->first();
        $categories = BikePartCategory::where('brand_id', $ktm_brand->id)->where('id', 3)->get();
        foreach ($categories as $category) {
            $ktmPartScrape = new KTMPartScrape;
            $this->info('category_id: '.$category->id);
            Crawler::create()
                ->setMaximumDepth(0)
                ->setTotalCrawlLimit(1)
                ->setCrawlObserver($ktmPartScrape)
                ->startCrawling($category->crawl_url);
            $ktm390PartCategories = $ktmPartScrape->getContent();
            dd($ktm390PartCategories);
            // if (is_array($ktm390PartCategories)) {
            //     foreach ($ktm390PartCategories as $c) {
            //         BikePart::updateOrCreate([
            //             'category_id' => $category->id,
            //             'part' => $c['part']
            //         ], [
            //             'category_id' => $category->id,
            //             'number' => $c['number'],
            //             'name' => $c['description'],
            //             'part' => $c['part'],
            //         ]);
            //     }
            // }
        }
    }
}
