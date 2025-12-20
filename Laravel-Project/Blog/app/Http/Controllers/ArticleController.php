<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        // return "Controller - Article List";
        // return view('articles/index');

        // $data = [
        //     ["id" => 1, "title" => "First Article"],
        //     ["id" => 2, "title" => "Second Article"],
        // ];

        // return view('articles.index', [
        //     'articles' => $data
        // ]);

        // $data = Article::all();

        // return view('articles.index', [
        //     'articles' => $data
        // ]);

        $data = Article::latest()->paginate(5);

        return view('articles.index', [
            'articles' => $data
        ]);
    }

    public function detail($id) {
            $data = Article::find($id);
            return view('articles.detail', [
                'article' => $data
            ]);

    }

    public function info($boldText) {
        return "Controller - Article Info - <b>$boldText!</b>";
    }

    public function add()
    {
        $data = [
            [ "id" => 1, "name" => "News" ],
            [ "id" => 2, "name" => "Tech" ],
        ];

        return view('articles.add', [
            'categories' => $data
        ]);
    }
}
