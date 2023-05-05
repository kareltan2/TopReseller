<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class BagController extends Controller
{
    public function index()
    {
        // id: 
        // 1 --> Shirt
        // 2 --> Bag
        // 3 --> Shoes
        // 4 --> Dress
        $category = '2';
        $items = Item::where('category_id', '2')->get();
        return view('category', compact('items', 'category'));
    }
}
