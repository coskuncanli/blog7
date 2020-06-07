<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class Home extends Controller
{
    public function index(){
        $data['category'] = Category::withCount(['getCatCount'])->get();
        $data['article'] = Article::get();

        return view('front.home', $dadsta);
    }
}
