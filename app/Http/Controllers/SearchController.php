<?php

namespace App\Http\Controllers;

use App\Models\BikePart;
use App\Models\BikePartCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchKTM(Request $request)
    {
        $brand_id = 1;
        $bike_model_id = 1;
        $categories = BikePartCategory::select(['id', 'name', 'slug', 'brand_id', 'bike_model_id', 'image_url', 'translate'])
            ->where('brand_id', $brand_id)
            ->where('bike_model_id', $bike_model_id)
            ->get();

        return view('search.ktm', [
            'categories' => $categories,
        ]);
    }

    public function searchKTMCategory(Request $request, $category_id)
    {

        $category = BikePartCategory::where('id', $category_id)->first();
        $bike_model = $category->bike()->first();
        $bike_parts = BikePart::where('category_id', $category_id)->get();

        return view('search.ktm_category', [
            'bike_parts' => $bike_parts,
            'category_name' => $category->translate,
            'category_image' => $category ? $category->image_url : '',
            'bike_model' => $bike_model->name,
        ]);
    }

    public function handleSearchKTM(Request $request)
    {
        return view('search.ktm');
    }
}
