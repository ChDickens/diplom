<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {

        $products = Product::where('is_recommended', 1)->limit(4)->get();
        $manufacturers = DB::table('manufacturers')
                   ->orderBy('title', 'asc')
                   ->get();
        return view('front.main-page', compact('products', 'manufacturers'));
    }
}