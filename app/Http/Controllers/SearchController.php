<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->has('q')) {
            $products = Product::where('title', 'LIKE', '%s' . $request->get('q') . '%s')->get();
        }

        return view('front.search', compact('products'));
    }
}
