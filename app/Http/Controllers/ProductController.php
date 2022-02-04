<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Pizza::all();
        return view('products', compact('products'));
    }
}
