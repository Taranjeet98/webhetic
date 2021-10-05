<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->user_type == '1'){
            $articles = Article::all();
            return view('home', compact('articles'));
        }elseif(Auth::user()->user_type == '0'){
            $articles = Article::where('user_id', '=', Auth::user()->id)->get();
            return view('home', compact('articles'));
        }
    }
}
