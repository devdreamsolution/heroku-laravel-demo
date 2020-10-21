<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('/products/index', [
            'products' => $products
        ]);
    }
}
