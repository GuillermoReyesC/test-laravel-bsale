<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index() {

        $products =  Products::paginate(10);

        return $products;

    }
}
