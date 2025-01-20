<?php
namespace App\Console\Commands\KTM;

use App\Models\BikeModel;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Crawl\KTMCategoryScrape;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
        $data = [
            [
                'name'      => 'Duke 200 2014',
                'year'      => 2014,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/200_MOTO/2014/DUKE/200-DUKE-ORANGE-ABS/849',
            ],
            [
                'name'      => 'Duke 200 2016',
                'year'      => 2016,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/200_MOTO/2016/DUKE/200-DUKE-ORANGE-NON-ABS/806',
            ],
            [
                'name'      => 'Duke 200 2022',
                'year'      => 2022,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/200_MOTO/2022/DUKE/200-DUKE-orange-ABS/4526',
            ],
            [
                'name'      => 'Duke 250 2016',
                'year'      => 2016,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/250_MOTO/2016/DUKE/250-DUKE-BLACK-ABS/756',
            ],
            [
                'name'      => 'Duke 390 2014',
                'year'      => 2014,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/390_MOTO/2014/DUKE/390-DUKE-WHITE-ABS/720',
            ],
            [
                'name'      => 'Duke 390 2016',
                'year'      => 2016,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/390_MOTO/2016/DUKE/390-DUKE-WHITE-ABS/670',
            ],
            [
                'name'      => 'Duke 390 2018',
                'year'      => 2018,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/390_MOTO/2018/DUKE/390-DUKE-ORANGE/630',
            ],
            [
                'name'      => 'Duke 390 2024',
                'year'      => 2024,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/390_Moto/2024/Duke/390-DUKE-blue/5090',
            ],
            [
                'name'      => 'RC 200 2016',
                'year'      => 2016,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/200_MOTO/2016/RC/RC-200-WHITE-NON-ABS/248',
            ],
            [
                'name'      => 'RC 250 2016',
                'year'      => 2016,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/250_MOTO/2016/RC/RC-250-WHITE-ABS/232',
            ],
            [
                'name'      => 'RC 390 2016',
                'year'      => 2016,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/390_MOTO/2015/RC/RC-390-WHITE-ABS/210',
            ],
            [
                'name'      => 'RC 390 2018',
                'year'      => 2018,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/390_MOTO/2016/RC/RC-390-WHITE-ABS/198',
            ],
            [
                'name'      => 'RC 390 2022',
                'year'      => 2022,
                'crawl_url' => 'https://www.bike-parts-ktm.com/ktm-motorcycle/390_MOTO/2022/RC/RC-390-blue/4628',
            ],
        ];
        // $bikeModel = BikeModel::where('slug', 'duke-390-2016')->first();
        // $domain = 'https://www.bike-parts-ktm.com';
        // $category_url = '/ktm-motorcycle/390_MOTO/2016/DUKE/390-DUKE-WHITE-ABS/655';
        $brand = Brand::where('slug', 'ktm')->first();

        foreach ($data as $item) {
            $bikeModel           = BikeModel::where('slug', Str::slug($item['name']))->first();
            $ktmCategoryObserver = new KTMCategoryScrape();
            Crawler::create()
                ->setMaximumDepth(0)
                ->setTotalCrawlLimit(1)
                ->setCrawlObserver($ktmCategoryObserver)
                ->startCrawling($item['crawl_url']);
            $ktmCategoryCategories = $ktmCategoryObserver->getContent();
            if (is_array($ktmCategoryCategories)) {
                foreach ($ktmCategoryCategories as $c) {
                    $string    = substr($c['name'], strpos($c['name'], 'for'), strlen($c['name']));
                    $c['name'] = str_replace($string, '', $c['name']);
                    $contents = file_get_contents($c['img']);
                    $name = substr($c['img'], strrpos($c['img'], '/') + 1);
                    Storage::put($name, $contents);
                    Category::updateOrCreate([
                        'brand_id'      => $brand->id,
                        'bike_model_id' => $bikeModel->id,
                        'name'          => $c['name'],
                    ], [
                        'brand_id'      => $brand->id,
                        'name'          => $c['name'],
                        'crawl_url'     => 'https://www.bike-parts-ktm.com' . $c['url'],
                        'bike_model_id' => $bikeModel->id,
                    ]);
                }
            }
        }
    }
}
