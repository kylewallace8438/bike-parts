<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMaintenanceHistoryRequest;
use App\Http\Resources\MaintenanceResource;
use App\Services\QrService;
use App\Services\MaintenanceService;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MaintenanceHistoryController extends Controller
{
    public function __construct(
        protected MaintenanceService $maintenanceService,
    )
    {

    }

    public function getMyHistory(Request $request)
    {
        $histories = $this->maintenanceService->getByMaintainerId($request);
        return MaintenanceResource::collection($histories);
    }

    /**
     * Store a new maintenance history record
     *
     * @param CreateMaintenanceHistoryRequest $request
     * @return MaintenanceResource|\Illuminate\Http\JsonResponse
     */
    public function store(CreateMaintenanceHistoryRequest $request)
    {
        try {
            $data = array_merge($request->all(), [
                'maintainer_id' => $request->user()->id
            ]);

            $imagePaths = [];
            if ($request->file('images')) {
                $files = is_array($request->file('images')) ? $request->file('images') : [$request->file('images')];
                foreach ($files as $file) {
                    $imagePaths[] = ['image_path' => Storage::disk('public')->putFile('maintenance', $file)];
                }
            }
            $result = $this->maintenanceService->store(array_merge($data, ['images' => $imagePaths]));

            return new MaintenanceResource($result);
        } catch (\Exception $e) {
            // Delete saved images if operation fails
            if (!empty($imagePaths)) {
                foreach ($imagePaths as $imageData) {
                    Storage::disk('public')->delete($imageData['image_path']);
                }
            }

            return response()->json([
                'message' => 'Failed to create maintenance history record',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show(int $id)
    {
        // Logic to retrieve a specific bike history record
    }

    public function update(Request $request, int $id)
    {
        // Logic to update a specific bike history record
    }

    public function destroy(int $id)
    {
        // Logic to delete a specific bike history record
    }
}
