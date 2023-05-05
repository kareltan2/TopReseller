<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Item;
use Illuminate\Http\Request;

class BrandsDetailsController extends Controller
{
    public function index($id)
    {
        $brands = Brand::find($id);
        $items = Item::where('brand_id', $id)->get();
        return view('brand_detail', compact('brands', 'items'));
    }
}
