<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function search(Request $request) {
    	
    	$filterCat = $request->input('cat');
    	$filterMerk = $request->input('model');
        $products = Product::where(function ($query) use ($filterCat) {
                    if ($filterCat) {
                        foreach ($filterCat as $cat) {
                            $query->orWhere('category_id', '=', $cat);
                        }
                    }
                })->where(function ($query) use ($filterMerk) {
                    if ($filterMerk) {
                        foreach ($filterMerk as $merk) {
                            $query->orWhere('model', 'like', '%'. $merk .'%');
                        }
                    }
                })->toSql();

                dd($products);


        return view('front.search-page', compact('products'));
    }
}
