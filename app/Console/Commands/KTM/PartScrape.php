<?php

namespace App\Console\Commands\KTM;

use App\Models\BikePart;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Crawl\KTMPartScrape;
use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;

class PartScrape extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:ktm-part-scrape';

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
        Category::where('brand_id', $ktm_brand->id)
            ->chunk(5, function ($categories) {
                foreach ($categories as $category) {
                    $ktmPartScrape = new KTMPartScrape;
                    Crawler::create()
                        ->setMaximumDepth(0)
                        ->setTotalCrawlLimit(1)
                        ->setCrawlObserver($ktmPartScrape)
                        ->startCrawling($category->crawl_url);
                    $ktm390PartCategories = $ktmPartScrape->getContent();
                    if (is_array($ktm390PartCategories)) {
                        foreach ($ktm390PartCategories as $c) {
                            BikePart::updateOrCreate([
                                'category_id' => $category->id,
                                'part' => $c['part'],
                            ], [
                                'category_id' => $category->id,
                                'number' => $c['number'],
                                'name' => $c['name'],
                                'part' => $c['part'],
                                'reference_price' => $c['price'],
                            ]);
                        }
                    }
                }
            });
    }
}
