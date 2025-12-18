<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return 'Product List - <ul><li>Hamburger</li><li>Coffee</li></ul>';
    }
}
