<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index() {

        $products =  Products::all();

        return $products;

    }

    public function show($name) {

        $product = Products::where('name','LIKE', '%'.strtoupper($name).'%')->get();

        return $product;

    }
}