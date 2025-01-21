<?php

namespace App\Console\Commands\KTM;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Crawl\KTMPartScrape;
use App\Models\Crawl\KTMPartScrapeSingle;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Spatie\Crawler\Crawler;

class GetCategoryImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-category-image';

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
            ->chunkById(5, function ($categories) {
                foreach ($categories as $category) {
                    $ktmPartScrape = new KTMPartScrapeSingle();
                    Crawler::create()
                        ->setMaximumDepth(0)
                        ->setTotalCrawlLimit(1)
                        ->setCrawlObserver($ktmPartScrape)
                        ->startCrawling($category->crawl_url);
                    $content = $ktmPartScrape->getContent();
                    $contents = file_get_contents($content['image']);
                    $name = substr($content['image'], strrpos($content['image'], '/') + 1);
                    Storage::disk('public')->put($name , $contents);
                    $category->image_url = $name;
                    $category->save();
                }
        });
    }
}
