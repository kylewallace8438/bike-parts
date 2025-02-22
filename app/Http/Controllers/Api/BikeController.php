<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BikePart;
use App\Models\Category;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function handleSearchKTM(Request $request, $category_id)
    {
        $category = Category::where('id', $category_id)->first();
        $bike_model = $category->bike()->first();
        $bike_parts = BikePart::where('category_id', $category_id)->get();

        return response()->json([
            'bike_parts' => $bike_parts,
            'category_name' => $category->translate,
            'category_image' => $category ? $category->image_url : '',
            'bike_model' => $bike_model->name,
        ]);
    }
}
