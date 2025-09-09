<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\RentalBike;
use App\Models\MaintenanceHistory;

class MaintenanceHistoryApiTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $admin;
    protected $rentalBike;

    protected function setUp(): void
    {
        parent::setUp();

        // Tạo user thường
        $this->user = User::factory()->create();

        // Tạo admin user (giả sử có role field)
        $this->admin = User::factory()->create([
            'role' => 'admin'
        ]);

        // Tạo rental bike để test
        $this->rentalBike = RentalBike::create([
            'name' => 'Test Bike',
            'description' => 'Test bike for maintenance',
            'brand' => 'Trek',
            'model' => 'X-Caliber',
            'qr_code' => 'BIKE_TEST_001',
            'rental_price_per_hour' => 50000,
            'rental_price_per_day' => 300000,
            'status' => 'available',
            'is_active' => true,
        ]);
    }

    /** @test */
    public function test_can_lookup_maintenance_history_by_bike_plate()
    {
        // Tạo maintenance history
        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_001',
            'bike_model' => 'X-Caliber',
            'bike_brand' => 'Trek',
            'rental_bike_id' => $this->rentalBike->id,
            'maintenance_date' => now()->subDays(30),
            'maintenance_type' => 'routine',
            'priority' => 'normal',
            'description' => 'Regular maintenance',
            'labor_cost' => 100000,
            'parts_cost' => 50000,
            'total_cost' => 150000,
            'technician_name' => 'Test Technician',
            'technician_id' => 'TECH001',
            'status' => 'completed',
            'completed_date' => now()->subDays(30),
        ]);

        $response = $this->getJson('/api/maintenance/plate/BIKE_TEST_001');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'success',
                    'data' => [
                        'bike_plate',
                        'histories' => [
                            'current_page',
                            'data' => [
                                '*' => [
                                    'id',
                                    'bike_plate',
                                    'maintenance_date',
                                    'maintenance_type',
                                    'description',
                                    'total_cost',
                                    'status',
                                ]
                            ],
                            'total',
                            'per_page',
                        ],
                        'summary' => [
                            'total_maintenance_cost',
                            'maintenance_frequency',
                            'last_maintenance_date',
                            'days_since_last_maintenance',
                        ]
                    ]
                ]);

        $this->assertEquals('BIKE_TEST_001', $response->json('data.bike_plate'));
        $this->assertEquals(1, $response->json('data.histories.total'));
    }

    /** @test */
    public function test_can_get_all_maintenance_records_with_auth()
    {
        $this->actingAs($this->user);

        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_001',
            'maintenance_date' => now(),
            'maintenance_type' => 'routine',
            'description' => 'Test maintenance',
            'labor_cost' => 100000,
            'parts_cost' => 50000,
            'total_cost' => 150000,
            'status' => 'completed',
        ]);

        $response = $this->getJson('/api/maintenance');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'success',
                    'data' => [
                        'current_page',
                        'data' => [
                            '*' => [
                                'id',
                                'bike_plate',
                                'maintenance_date',
                                'maintenance_type',
                                'total_cost',
                                'status',
                            ]
                        ],
                        'total',
                        'per_page',
                    ]
                ]);
    }

    /** @test */
    public function test_cannot_get_all_maintenance_records_without_auth()
    {
        $response = $this->getJson('/api/maintenance');

        $response->assertStatus(401);
    }

    /** @test */
    public function test_can_get_maintenance_statistics_with_auth()
    {
        $this->actingAs($this->user);

        // Tạo vài maintenance records
        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_001',
            'maintenance_date' => now(),
            'maintenance_type' => 'routine',
            'description' => 'Test maintenance 1',
            'labor_cost' => 100000,
            'parts_cost' => 50000,
            'total_cost' => 150000,
            'status' => 'completed',
        ]);

        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_002',
            'maintenance_date' => now(),
            'maintenance_type' => 'repair',
            'description' => 'Test maintenance 2',
            'labor_cost' => 200000,
            'parts_cost' => 100000,
            'total_cost' => 300000,
            'status' => 'completed',
        ]);

        $response = $this->getJson('/api/maintenance/statistics/overview');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'success',
                    'data' => [
                        'total_maintenances',
                        'completed_maintenances',
                        'total_cost',
                        'average_cost',
                        'maintenance_by_type',
                        'maintenance_by_technician',
                    ]
                ]);

        $this->assertEquals(2, $response->json('data.total_maintenances'));
        $this->assertEquals('450000.00', $response->json('data.total_cost'));
    }

    /** @test */
    public function test_admin_can_create_maintenance_record()
    {
        $this->actingAs($this->admin);

        $maintenanceData = [
            'bike_plate' => 'BIKE_TEST_001',
            'bike_model' => 'X-Caliber',
            'bike_brand' => 'Trek',
            'rental_bike_id' => $this->rentalBike->id,
            'maintenance_date' => now()->format('Y-m-d'),
            'maintenance_type' => 'routine',
            'priority' => 'normal',
            'description' => 'New maintenance record',
            'parts_replaced' => [
                ['part_name' => 'brake_pads', 'quantity' => 2, 'cost' => 50000]
            ],
            'services_performed' => ['cleaning', 'lubrication'],
            'labor_cost' => 150000,
            'parts_cost' => 50000,
            'technician_name' => 'Test Technician',
            'technician_id' => 'TECH001',
            'workshop_location' => 'Test Workshop',
            'status' => 'completed',
            'completed_date' => now()->format('Y-m-d'),
        ];

        $response = $this->postJson('/api/maintenance', $maintenanceData);

        $response->assertStatus(201)
                ->assertJsonStructure([
                    'success',
                    'message',
                    'data' => [
                        'id',
                        'bike_plate',
                        'maintenance_type',
                        'total_cost',
                        'status',
                    ]
                ]);

        $this->assertDatabaseHas('maintenance_histories', [
            'bike_plate' => 'BIKE_TEST_001',
            'maintenance_type' => 'routine',
            'description' => 'New maintenance record',
        ]);
    }

    /** @test */
    public function test_user_cannot_create_maintenance_record()
    {
        $this->actingAs($this->user);

        $maintenanceData = [
            'bike_plate' => 'BIKE_TEST_001',
            'maintenance_date' => now()->format('Y-m-d'),
            'maintenance_type' => 'routine',
            'description' => 'New maintenance record',
            'labor_cost' => 150000,
            'parts_cost' => 50000,
        ];

        $response = $this->postJson('/api/maintenance', $maintenanceData);

        $response->assertStatus(403); // Forbidden
    }

    /** @test */
    public function test_admin_can_update_maintenance_record()
    {
        $this->actingAs($this->admin);

        $maintenance = MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_001',
            'maintenance_date' => now(),
            'maintenance_type' => 'routine',
            'description' => 'Original description',
            'labor_cost' => 100000,
            'parts_cost' => 50000,
            'total_cost' => 150000,
            'status' => 'scheduled',
        ]);

        $updateData = [
            'description' => 'Updated description',
            'status' => 'completed',
            'completed_date' => now()->format('Y-m-d'),
        ];

        $response = $this->putJson("/api/maintenance/{$maintenance->id}", $updateData);

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'success',
                    'message',
                    'data'
                ]);

        $this->assertDatabaseHas('maintenance_histories', [
            'id' => $maintenance->id,
            'description' => 'Updated description',
            'status' => 'completed',
        ]);
    }

    /** @test */
    public function test_admin_can_delete_maintenance_record()
    {
        $this->actingAs($this->admin);

        $maintenance = MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_001',
            'maintenance_date' => now(),
            'maintenance_type' => 'routine',
            'description' => 'To be deleted',
            'labor_cost' => 100000,
            'parts_cost' => 50000,
            'total_cost' => 150000,
            'status' => 'scheduled',
        ]);

        $response = $this->deleteJson("/api/maintenance/{$maintenance->id}");

        $response->assertStatus(200)
                ->assertJson([
                    'success' => true,
                    'message' => 'Maintenance record deleted successfully'
                ]);

        $this->assertDatabaseMissing('maintenance_histories', [
            'id' => $maintenance->id,
        ]);
    }

    /** @test */
    public function test_can_get_bikes_due_for_maintenance()
    {
        $this->actingAs($this->user);

        // Tạo maintenance record với next_maintenance_due đã qua
        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_001',
            'rental_bike_id' => $this->rentalBike->id,
            'maintenance_date' => now()->subDays(90),
            'maintenance_type' => 'routine',
            'description' => 'Previous maintenance',
            'labor_cost' => 100000,
            'parts_cost' => 50000,
            'total_cost' => 150000,
            'status' => 'completed',
            'next_maintenance_due' => now()->subDays(5), // Overdue
        ]);

        $response = $this->getJson('/api/maintenance/due/list');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'success',
                    'data' => [
                        'total_bikes_due',
                        'bikes' => [
                            '*' => [
                                'bike_plate',
                                'next_maintenance_due',
                                'days_overdue',
                                'last_maintenance_type',
                                'rental_bike',
                            ]
                        ]
                    ]
                ]);

        $this->assertEquals(1, $response->json('data.total_bikes_due'));
    }

    /** @test */
    public function test_can_filter_maintenance_history_by_date_range()
    {
        // Tạo maintenance records với các ngày khác nhau
        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_001',
            'maintenance_date' => now()->subDays(10),
            'maintenance_type' => 'routine',
            'description' => 'Recent maintenance',
            'labor_cost' => 100000,
            'parts_cost' => 50000,
            'total_cost' => 150000,
            'status' => 'completed',
        ]);

        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_001',
            'maintenance_date' => now()->subDays(60),
            'maintenance_type' => 'repair',
            'description' => 'Old maintenance',
            'labor_cost' => 200000,
            'parts_cost' => 100000,
            'total_cost' => 300000,
            'status' => 'completed',
        ]);

        // Filter để chỉ lấy maintenance trong 30 ngày qua
        $startDate = now()->subDays(30)->format('Y-m-d');
        $endDate = now()->format('Y-m-d');

        $response = $this->getJson("/api/maintenance/plate/BIKE_TEST_001?start_date={$startDate}&end_date={$endDate}");

        $response->assertStatus(200);

        $histories = $response->json('data.histories.data');
        $this->assertCount(1, $histories);
        $this->assertEquals('Recent maintenance', $histories[0]['description']);
    }

    /** @test */
    public function test_can_get_average_costs_by_maintenance_type()
    {
        $this->actingAs($this->user);

        // Tạo các maintenance records với types khác nhau
        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_001',
            'maintenance_date' => now(),
            'maintenance_type' => 'routine',
            'description' => 'Routine maintenance 1',
            'labor_cost' => 100000,
            'parts_cost' => 50000,
            'total_cost' => 150000,
            'status' => 'completed',
        ]);

        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_002',
            'maintenance_date' => now(),
            'maintenance_type' => 'routine',
            'description' => 'Routine maintenance 2',
            'labor_cost' => 120000,
            'parts_cost' => 80000,
            'total_cost' => 200000,
            'status' => 'completed',
        ]);

        MaintenanceHistory::create([
            'bike_plate' => 'BIKE_TEST_003',
            'maintenance_date' => now(),
            'maintenance_type' => 'repair',
            'description' => 'Repair maintenance',
            'labor_cost' => 300000,
            'parts_cost' => 200000,
            'total_cost' => 500000,
            'status' => 'completed',
        ]);

        $response = $this->getJson('/api/maintenance/statistics/average-costs');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'success',
                    'data' => [
                        '*' => [
                            'maintenance_type',
                            'count',
                            'total_cost',
                            'average_cost',
                            'min_cost',
                            'max_cost',
                        ]
                    ]
                ]);

        $data = $response->json('data');

        // Tìm routine maintenance type
        $routineStats = collect($data)->firstWhere('maintenance_type', 'routine');
        $this->assertNotNull($routineStats);
        $this->assertEquals(2, $routineStats['count']);
        $this->assertEquals('175000.00', $routineStats['average_cost']); // (150000 + 200000) / 2
    }
}
