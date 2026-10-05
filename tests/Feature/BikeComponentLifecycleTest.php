<?php

namespace Tests\Feature;

use App\Models\Bike;
use App\Models\BikeComponent;
use App\Models\BikeComponentHistory;
use App\Models\Brand;
use App\Models\ComponentTemplate;
use App\Models\User;
use App\Services\ComponentHealthCalculatorService;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BikeComponentLifecycleTest extends TestCase
{
    use RefreshDatabase;

    protected User $user;
    protected Brand $brand;
    protected Bike $bike;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->brand = Brand::create([
            'name' => 'Honda',
        ]);

        $this->bike = Bike::create([
            'user_id' => $this->user->id,
            'brand_id' => $this->brand->id,
            'plate_number' => '59-X1 12345',
            'name' => 'Air Blade 2024',
            'engine_number' => 'ENG123456',
            'chasis_number' => 'CHA123456',
        ]);
    }

    /**
     * TC-CMP-01: Calculate Health by Km correctly.
     * Input: installed_odo=10000, interval_km=10000, current_odo=15000
     * Expected: Wear 50%, Health=50%, Status=good
     */
    public function test_tc_cmp_01_health_calculation_by_km(): void
    {
        $component = BikeComponent::create([
            'bike_id' => $this->bike->id,
            'component_key' => 'air_filter',
            'custom_name' => 'Lọc gió zin Honda',
            'installed_odo' => 10000,
            'installed_date' => Carbon::today()->toDateString(),
            'interval_km' => 10000,
            'interval_days' => null,
            'status' => 'good',
        ]);

        $service = app(ComponentHealthCalculatorService::class);
        $result = $service->calculateHealth($component, 15000);

        $this->assertEquals(50, $result['health_percentage']);
        $this->assertEquals('good', $result['status']);
    }

    /**
     * TC-CMP-02: Transition to warning status.
     * Input: installed_odo=10000, interval_km=10000, current_odo=18200
     * Expected: Wear 82%, Health=18%, Status=warning
     */
    public function test_tc_cmp_02_status_transitions_to_warning(): void
    {
        $component = BikeComponent::create([
            'bike_id' => $this->bike->id,
            'component_key' => 'air_filter',
            'custom_name' => 'Lọc gió',
            'installed_odo' => 10000,
            'installed_date' => Carbon::today()->toDateString(),
            'interval_km' => 10000,
            'interval_days' => null,
            'status' => 'good',
        ]);

        $service = app(ComponentHealthCalculatorService::class);
        $result = $service->calculateHealth($component, 18200);

        $this->assertEquals(18, $result['health_percentage']);
        $this->assertEquals('warning', $result['status']);
    }

    /**
     * TC-CMP-03: Transition to critical status.
     * Input: installed_odo=10000, interval_km=10000, current_odo=19600
     * Expected: Wear 96%, Health=4%, Status=critical
     */
    public function test_tc_cmp_03_status_transitions_to_critical(): void
    {
        $component = BikeComponent::create([
            'bike_id' => $this->bike->id,
            'component_key' => 'air_filter',
            'custom_name' => 'Lọc gió',
            'installed_odo' => 10000,
            'installed_date' => Carbon::today()->toDateString(),
            'interval_km' => 10000,
            'interval_days' => null,
            'status' => 'good',
        ]);

        $service = app(ComponentHealthCalculatorService::class);
        $result = $service->calculateHealth($component, 19600);

        $this->assertEquals(4, $result['health_percentage']);
        $this->assertEquals('critical', $result['status']);
    }

    /**
     * TC-CMP-04: Wear exceeds 100%, health clamped to 0.
     * Input: installed_odo=10000, interval_km=10000, current_odo=21000
     * Expected: Health=0%, Status=expired
     */
    public function test_tc_cmp_04_health_does_not_go_negative(): void
    {
        $component = BikeComponent::create([
            'bike_id' => $this->bike->id,
            'component_key' => 'air_filter',
            'custom_name' => 'Lọc gió',
            'installed_odo' => 10000,
            'installed_date' => Carbon::today()->toDateString(),
            'interval_km' => 10000,
            'interval_days' => null,
            'status' => 'good',
        ]);

        $service = app(ComponentHealthCalculatorService::class);
        $result = $service->calculateHealth($component, 21000);

        $this->assertEquals(0, $result['health_percentage']);
        $this->assertEquals('expired', $result['status']);
    }

    /**
     * TC-CMP-05: Dual rule - takes the worse condition between km and days.
     * Drive belt: only 5000km used (25% of 20000km) but installed 3 years ago (interval 2 years = 730 days).
     * Days wear > 100%, so Health = 0%, Status = expired.
     */
    public function test_tc_cmp_05_dual_rule_takes_worse_condition(): void
    {
        $component = BikeComponent::create([
            'bike_id' => $this->bike->id,
            'component_key' => 'drive_belt',
            'custom_name' => 'Dây curoa',
            'installed_odo' => 10000,
            'installed_date' => Carbon::today()->subDays(1095)->toDateString(), // 3 years ago
            'interval_km' => 20000,
            'interval_days' => 730, // 2 years
            'status' => 'good',
        ]);

        $service = app(ComponentHealthCalculatorService::class);
        // Only 5000km used
        $result = $service->calculateHealth($component, 15000);

        $this->assertEquals(0, $result['health_percentage']);
        $this->assertEquals('expired', $result['status']);
    }

    /**
     * TC-CMP-06: Replace component resets lifecycle and creates history.
     */
    public function test_tc_cmp_06_replace_resets_lifecycle(): void
    {
        $component = BikeComponent::create([
            'bike_id' => $this->bike->id,
            'component_key' => 'air_filter',
            'custom_name' => 'Lọc gió cũ',
            'installed_odo' => 200,
            'installed_date' => Carbon::today()->subYear()->toDateString(),
            'interval_km' => 10000,
            'interval_days' => 365,
            'status' => 'expired',
        ]);

        $replaceData = [
            'new_part_name' => 'Lọc gió zin Honda',
            'replaced_odo' => 10200,
            'replaced_date' => Carbon::today()->toDateString(),
            'cost' => 145000,
            'garage_name' => 'Honda Head',
        ];

        $response = $this->actingAs($this->user, 'sanctum')
            ->postJson("/api/bikes/{$this->bike->id}/components/{$component->id}/replace", $replaceData);

        $response->assertStatus(200)
            ->assertJsonPath('data.custom_name', 'Lọc gió zin Honda')
            ->assertJsonPath('data.installed_odo', 10200)
            ->assertJsonPath('data.status', 'good');

        // Verify history was created
        $this->assertDatabaseHas('bike_component_histories', [
            'bike_id' => $this->bike->id,
            'component_key' => 'air_filter',
            'old_part_name' => 'Lọc gió cũ',
            'new_part_name' => 'Lọc gió zin Honda',
            'replaced_odo' => 10200,
            'cost' => 145000,
            'garage_name' => 'Honda Head',
        ]);
    }

    /**
     * TC-CMP-07: Template applies correct components for manual bike type.
     * Manual bikes should have sprocket_chain but NOT drive_belt.
     */
    public function test_tc_cmp_07_manual_template_has_sprocket_chain_not_drive_belt(): void
    {
        // Seed manual templates
        ComponentTemplate::create([
            'bike_type' => 'manual',
            'component_key' => 'engine_oil',
            'name_vi' => 'Nhớt máy',
            'default_interval_km' => 1500,
            'default_interval_days' => 90,
        ]);
        ComponentTemplate::create([
            'bike_type' => 'manual',
            'component_key' => 'sprocket_chain',
            'name_vi' => 'Nhông sên dĩa',
            'default_interval_km' => 15000,
            'default_interval_days' => 730,
        ]);

        $response = $this->actingAs($this->user, 'sanctum')
            ->postJson("/api/bikes/{$this->bike->id}/components/apply-template", [
                'bike_type' => 'manual',
                'current_odo' => 0,
            ]);

        $response->assertStatus(201);

        // Should have sprocket_chain
        $this->assertDatabaseHas('bike_components', [
            'bike_id' => $this->bike->id,
            'component_key' => 'sprocket_chain',
        ]);

        // Should NOT have drive_belt
        $this->assertDatabaseMissing('bike_components', [
            'bike_id' => $this->bike->id,
            'component_key' => 'drive_belt',
        ]);
    }

    /**
     * Test apply template API endpoint for scooter.
     */
    public function test_apply_scooter_template_creates_standard_components(): void
    {
        // Seed scooter templates
        $scooterComponents = [
            ['component_key' => 'engine_oil', 'name_vi' => 'Nhớt máy', 'default_interval_km' => 2000, 'default_interval_days' => 90],
            ['component_key' => 'gear_oil', 'name_vi' => 'Nhớt hộp số', 'default_interval_km' => 6000, 'default_interval_days' => 365],
            ['component_key' => 'spark_plug', 'name_vi' => 'Bugi', 'default_interval_km' => 10000, 'default_interval_days' => 365],
            ['component_key' => 'air_filter', 'name_vi' => 'Lọc gió', 'default_interval_km' => 10000, 'default_interval_days' => 365],
            ['component_key' => 'drive_belt', 'name_vi' => 'Dây curoa', 'default_interval_km' => 20000, 'default_interval_days' => 730],
            ['component_key' => 'coolant', 'name_vi' => 'Nước làm mát', 'default_interval_km' => 20000, 'default_interval_days' => 730],
            ['component_key' => 'brake_pad_front', 'name_vi' => 'Má phanh trước', 'default_interval_km' => 12000, 'default_interval_days' => 545],
            ['component_key' => 'clutch_weight', 'name_vi' => 'Bố ba càng / Bi nồi', 'default_interval_km' => 15000, 'default_interval_days' => 730],
        ];

        foreach ($scooterComponents as $comp) {
            ComponentTemplate::create(array_merge($comp, ['bike_type' => 'scooter']));
        }

        $response = $this->actingAs($this->user, 'sanctum')
            ->postJson("/api/bikes/{$this->bike->id}/components/apply-template", [
                'bike_type' => 'scooter',
                'current_odo' => 5000,
            ]);

        $response->assertStatus(201);

        // Should have created 8 components
        $this->assertCount(8, BikeComponent::where('bike_id', $this->bike->id)->get());

        // All should have installed_odo = 5000 and status = good
        $components = BikeComponent::where('bike_id', $this->bike->id)->get();
        foreach ($components as $comp) {
            $this->assertEquals(5000, $comp->installed_odo);
            $this->assertEquals('good', $comp->status);
        }
    }

    /**
     * Test GET components endpoint returns health data.
     */
    public function test_get_components_returns_health_data(): void
    {
        BikeComponent::create([
            'bike_id' => $this->bike->id,
            'component_key' => 'engine_oil',
            'custom_name' => 'Nhớt Motul',
            'installed_odo' => 1000,
            'installed_date' => Carbon::today()->toDateString(),
            'interval_km' => 2000,
            'status' => 'good',
        ]);

        $response = $this->actingAs($this->user, 'sanctum')
            ->getJson("/api/bikes/{$this->bike->id}/components?current_odo=2000");

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'component_key',
                        'custom_name',
                        'health_percentage',
                        'status',
                    ],
                ],
            ]);

        $data = $response->json('data.0');
        $this->assertEquals(50, $data['health_percentage']);
        $this->assertEquals('good', $data['status']);
    }

    /**
     * Test adding a custom component.
     */
    public function test_store_creates_new_component(): void
    {
        $response = $this->actingAs($this->user, 'sanctum')
            ->postJson("/api/bikes/{$this->bike->id}/components", [
                'component_key' => 'custom_accessory',
                'custom_name' => 'Phuộc YSS G-Sport',
                'specifications' => 'Phuộc sau đơn, dầu, 330mm',
                'installed_odo' => 5000,
                'installed_date' => '2026-01-15',
                'interval_km' => 30000,
                'interval_days' => 1095,
            ]);

        $response->assertStatus(201)
            ->assertJsonPath('data.component_key', 'custom_accessory')
            ->assertJsonPath('data.custom_name', 'Phuộc YSS G-Sport');

        $this->assertDatabaseHas('bike_components', [
            'bike_id' => $this->bike->id,
            'component_key' => 'custom_accessory',
        ]);
    }

    /**
     * Test updating component intervals.
     */
    public function test_update_modifies_component_settings(): void
    {
        $component = BikeComponent::create([
            'bike_id' => $this->bike->id,
            'component_key' => 'engine_oil',
            'custom_name' => 'Nhớt thường',
            'installed_odo' => 1000,
            'installed_date' => Carbon::today()->toDateString(),
            'interval_km' => 1500,
            'status' => 'good',
        ]);

        $response = $this->actingAs($this->user, 'sanctum')
            ->putJson("/api/bikes/{$this->bike->id}/components/{$component->id}", [
                'custom_name' => 'Nhớt Motul 300V',
                'interval_km' => 3000,
            ]);

        $response->assertStatus(200)
            ->assertJsonPath('data.custom_name', 'Nhớt Motul 300V')
            ->assertJsonPath('data.interval_km', 3000);
    }
}
