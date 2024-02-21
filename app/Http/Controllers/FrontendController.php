<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\News;

class FrontendController extends Controller
{
    public function index(){
        $news = News::all();
        return view('frontend_views.index', compact('news'));
    }
}
