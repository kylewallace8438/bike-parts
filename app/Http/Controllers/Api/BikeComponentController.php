<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyComponentTemplateRequest;
use App\Http\Requests\CreateBikeComponentRequest;
use App\Http\Requests\ReplaceComponentRequest;
use App\Http\Requests\UpdateBikeComponentRequest;
use App\Http\Resources\BikeComponentResource;
use App\Models\BikeComponent;
use App\Services\ComponentHealthCalculatorService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BikeComponentController extends Controller
{
    public function __construct(
        protected ComponentHealthCalculatorService $healthService,
    )
    {

    }

    /**
     * GET /api/bikes/{bikeId}/components
     * List all components for a bike with health status.
     */
    public function index(Request $request, int $bikeId): JsonResponse
    {
        $currentOdo = (int) $request->query('current_odo', 0);
        $components = $this->healthService->getComponentsWithHealth($bikeId, $currentOdo);

        return response()->json([
            'data' => $components,
        ]);
    }

    /**
     * POST /api/bikes/{bikeId}/components/apply-template
     * Initialize components from a bike type template.
     */
    public function applyTemplate(ApplyComponentTemplateRequest $request, int $bikeId): JsonResponse
    {
        $components = $this->healthService->applyTemplate(
            $bikeId,
            $request->input('bike_type'),
            (int) $request->input('current_odo', 0),
        );

        return response()->json([
            'message' => 'Template applied successfully.',
            'data' => BikeComponentResource::collection(collect($components)),
        ], 201);
    }

    /**
     * POST /api/bikes/{bikeId}/components
     * Add a new component to track.
     */
    public function store(CreateBikeComponentRequest $request, int $bikeId): JsonResponse
    {
        $data = array_merge($request->validated(), ['bike_id' => $bikeId]);
        $component = BikeComponent::create($data);

        return response()->json([
            'data' => new BikeComponentResource($component),
        ], 201);
    }

    /**
     * POST /api/bikes/{bikeId}/components/{id}/replace
     * Replace a component (archive old, reset to new).
     */
    public function replace(ReplaceComponentRequest $request, int $bikeId, int $id): JsonResponse
    {
        $component = BikeComponent::where('bike_id', $bikeId)->findOrFail($id);
        $updated = $this->healthService->replaceComponent($component, $request->validated());

        return response()->json([
            'message' => 'Component replaced successfully.',
            'data' => new BikeComponentResource($updated),
        ]);
    }

    /**
     * PUT /api/bikes/{bikeId}/components/{id}
     * Update component settings (intervals, etc.).
     */
    public function update(UpdateBikeComponentRequest $request, int $bikeId, int $id): JsonResponse
    {
        $component = BikeComponent::where('bike_id', $bikeId)->findOrFail($id);
        $component->update($request->validated());

        return response()->json([
            'data' => new BikeComponentResource($component->fresh()),
        ]);
    }
}
