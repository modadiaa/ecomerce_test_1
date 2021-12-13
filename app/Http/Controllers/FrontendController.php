<?php

namespace App\Http\Controllers;
use App\Category;
use App\CategoryTranslation;
use App\Product;
use App\ProductTranslation;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;



use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        return view('pages.index', compact('products','categories'));
    }
}
