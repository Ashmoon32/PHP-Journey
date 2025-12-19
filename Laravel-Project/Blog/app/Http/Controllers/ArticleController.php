<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        // return "Controller - Article List";
        // return view('articles/index');

        $data = [
            ["id" => 1, "title" => "First Article"],
            ["id" => 2, "title" => "Second Article"],
        ];

        return view('articles.index', [
            'articles' => $data
        ]);
    }

    public function detail($id) {
        return "Controller - Article Detail - $id";
    }

    public function info($boldText) {
        return "Controller - Article Info - <b>$boldText!</b>";
    }
}
