<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return "Controller - Article List";
    }

    public function detail($id) {
        return "Controller - Article Detail - $id";
    }
}
