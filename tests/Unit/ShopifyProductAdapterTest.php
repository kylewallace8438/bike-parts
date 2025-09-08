<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Services\ShopifyProductAdapter;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShopifyProductAdapterTest extends TestCase
{
    use RefreshDatabase;

    private $adapter;
    private $sampleShopifyData;

    protected function setUp(): void
    {
        parent::setUp();
        $this->adapter = new ShopifyProductAdapter();

        // Sample data giống như file JSON của bạn
        $this->sampleShopifyData = [
            "cursor" => "eyJsYXN0X2lkIjo4OTQwMTgyODY0MTA4LCJsYXN0X3ZhbHVlIjoiODk0MDE4Mjg2NDEwOCJ9",
            "node" => [
                "id" => "gid://shopify/Product/8940182864108",
                "title" => "Gương cho Duke/Svartpilen/Vitpilen",
                "tags" => [
                    "Duke",
                    "Huqsvana",
                    "KTM",
                    "RC",
                    "Svartpilen",
                    "Vitpilen"
                ],
                "vendor" => "kwapp-store",
                "featuredImage" => [
                    "url" => "https://cdn.shopify.com/s/files/1/0733/4291/0700/files/aiease_1749388042597.jpg?v=1749389803",
                    "width" => 800,
                    "height" => 800,
                    "altText" => null
                ],
                "priceRange" => [
                    "minVariantPrice" => [
                        "amount" => "300000.0",
                        "currencyCode" => "VND"
                    ],
                    "maxVariantPrice" => [
                        "amount" => "300000.0",
                        "currencyCode" => "VND"
                    ]
                ]
            ]
        ];
    }

    public function test_can_validate_shopify_data()
    {
        $this->assertTrue($this->adapter->validateShopifyData($this->sampleShopifyData));

        // Test invalid data
        $invalidData = ['invalid' => 'data'];
        $this->assertFalse($this->adapter->validateShopifyData($invalidData));
    }

    public function test_can_map_shopify_data_to_product()
    {
        $product = $this->adapter->mapToProduct($this->sampleShopifyData);

        $this->assertInstanceOf(Product::class, $product);
        $this->assertEquals(8940182864108, $product->shopify_id);
        $this->assertEquals('guong-cho-duke-svartpilen-vitpilen', $product->slug);
        $this->assertEquals('Gương cho Duke/Svartpilen/Vitpilen', $product->title);
        $this->assertEquals('kwapp-store', $product->vendor);
        $this->assertEquals(300000.0, $product->min_price);
        $this->assertEquals(300000.0, $product->max_price);
        $this->assertEquals('VND', $product->currency_code);
        $this->assertIsArray($product->tags);
        $this->assertContains('Duke', $product->tags);
    }

    public function test_can_create_or_update_product()
    {
        // Tạo product mới
        $product = $this->adapter->createOrUpdateProduct($this->sampleShopifyData);

        $this->assertDatabaseHas('products', [
            'shopify_id' => 8940182864108,
            'title' => 'Gương cho Duke/Svartpilen/Vitpilen',
            'vendor' => 'kwapp-store'
        ]);

        // Update product đã tồn tại
        $updatedData = $this->sampleShopifyData;
        $updatedData['node']['title'] = 'Updated Title';

        $updatedProduct = $this->adapter->createOrUpdateProduct($updatedData);

        $this->assertEquals($product->shopify_id, $updatedProduct->shopify_id);
        $this->assertEquals('Updated Title', $updatedProduct->title);

        // Chỉ có 1 record trong database
        $this->assertEquals(1, Product::count());
    }

    public function test_extract_shopify_id()
    {
        $reflection = new \ReflectionClass($this->adapter);
        $method = $reflection->getMethod('extractShopifyId');
        $method->setAccessible(true);

        $gid = "gid://shopify/Product/8940182864108";
        $id = $method->invokeArgs($this->adapter, [$gid]);

        $this->assertEquals(8940182864108, $id);
    }

    public function test_generate_slug()
    {
        $reflection = new \ReflectionClass($this->adapter);
        $method = $reflection->getMethod('generateSlug');
        $method->setAccessible(true);

        $title = "Gương cho Duke/Svartpilen/Vitpilen";
        $slug = $method->invokeArgs($this->adapter, [$title]);

        $this->assertEquals('guong-cho-duke-svartpilen-vitpilen', $slug);
    }

    public function test_extract_price()
    {
        $reflection = new \ReflectionClass($this->adapter);
        $method = $reflection->getMethod('extractPrice');
        $method->setAccessible(true);

        $priceData = ["amount" => "300000.0", "currencyCode" => "VND"];
        $price = $method->invokeArgs($this->adapter, [$priceData]);

        $this->assertEquals(300000.0, $price);

        // Test null data
        $nullPrice = $method->invokeArgs($this->adapter, [null]);
        $this->assertNull($nullPrice);
    }
}
