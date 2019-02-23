<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
class SearchController extends Controller
{
    public function search(Request $request) {
        if($request->has('search')) {
            $products = Product::where('is_active', 1)
              ->where('title', 'LIKE', '%' . $request->get('search') . '%')
              ->orWhere('content', 'LIKE', '%' . $request->get('search') . '%')
                ->get();
        }

        return view('front.search-page', compact('products'));
    }
}
