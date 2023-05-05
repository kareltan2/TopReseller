<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemDetailsController extends Controller
{
    public function show($id)
    {
        $item = Item::find($id);
        return view('item_detail', compact('item'));
    }
}
