<?php

namespace App\Console\Commands\KTM;

use App\Models\BikeModel;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Crawl\KTMCategoryScrape;
use App\Models\CrawlCategoryBrand;
use Illuminate\Console\Command;
use Spatie\Crawler\Crawler;

class CategoryScrape extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:ktm-category-scrape';

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
        // duke 390 2016
        $brand = Brand::where('slug', 'ktm')->first();
        $bikeModel = BikeModel::where('slug', 'duke-390-2016')->first();
        $domain = 'https://www.bike-parts-ktm.com';
        $category_url = '/ktm-motorcycle/390_MOTO/2016/DUKE/390-DUKE-WHITE-ABS/655';
        $ktmCategoryObserver = new KTMCategoryScrape();
        Crawler::create()
            ->setMaximumDepth(0)
            ->setTotalCrawlLimit(1)
            ->setCrawlObserver($ktmCategoryObserver)
            ->startCrawling($domain . $category_url);
        $ktm390CategoryCategories = $ktmCategoryObserver->getContent();
        if (is_array($ktm390CategoryCategories)) {
            foreach ($ktm390CategoryCategories as $c) {
                $string = substr($c['name'], strpos($c['name'], 'for'), strlen($c['name']));
                $c['name'] = str_replace($string, '', $c['name']);
                $crawlCategoryBrand = new Category([
                    'brand_id' => $brand->id,
                    'name' => $c['name'],
                    'crawl_url' => $domain . $c['url'],
                    'bike_model_id' => $bikeModel->id
                ]);
                $crawlCategoryBrand->save();
            }
        }
    }
}
