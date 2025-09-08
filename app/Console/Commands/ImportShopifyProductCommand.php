<?php

namespace App\Console\Commands;

use App\Services\ShopifyProductAdapter;
use Illuminate\Console\Command;

class ImportShopifyProductCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shopify:import-product {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import product from Shopify JSON file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = $this->argument('file');

        if (!file_exists($filePath)) {
            $this->error("File not found: {$filePath}");
            return 1;
        }

        $jsonContent = file_get_contents($filePath);
        $shopifyData = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->error('Invalid JSON format');
            return 1;
        }

        $adapter = new ShopifyProductAdapter();

        // Validate dữ liệu
        if (!$adapter->validateShopifyData($shopifyData)) {
            $this->error('Invalid Shopify data format');
            return 1;
        }

        try {
            // Tạo hoặc cập nhật product
            $product = $adapter->createOrUpdateProduct($shopifyData);

            $this->info("Product imported successfully!");
            $this->info("Shopify ID: {$product->shopify_id}");
            $this->info("Title: {$product->title}");
            $this->info("Slug: {$product->slug}");
            $this->info("Vendor: {$product->vendor}");
            $this->info("Price Range: {$product->min_price} - {$product->max_price} {$product->currency_code}");

            return 0;
        } catch (\Exception $e) {
            $this->error("Error importing product: " . $e->getMessage());
            return 1;
        }
    }
}
