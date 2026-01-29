<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $articles = Article::latest()->take(5)->get();

        return view('welcome', compact('articles') );
    }
    //
}
