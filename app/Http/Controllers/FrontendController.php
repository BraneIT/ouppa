<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\News;

class FrontendController extends Controller
{
    public function index(){
        $news = News::all();
        return view('frontend_views.index', compact('news'));
    }
    public function gallery(){
        $images = Gallery::all();
        return view('frontend_views.gallery', compact('images'));
    }
}
