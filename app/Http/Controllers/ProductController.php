<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::with(['category','supplier'])->get();
        return Inertia::render('inventory/index', [
            'products' => $products
        ]);
    }

    public function create(){
        return Inertia::render('inventory/create');

    }

}
