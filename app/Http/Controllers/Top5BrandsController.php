<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class Top5BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::whereIn('top5_flag', [1, 2, 3, 4, 5])->get();
        return view('top5brand', compact('brands'));
    }
}
