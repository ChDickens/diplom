<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();

        if($product == null) {
            \abort(404, 'Page not found');
        }

        return view('front.product-single', compact('product'));
    }
}
