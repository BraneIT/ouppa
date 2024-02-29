<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use App\Models\Erasmus;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\News;

class FrontendController extends Controller
{
    public function index(){
        $news = News::paginate(6);
        $gallery = Gallery::paginate(6);
        return view('frontend_views.index', compact('news', 'gallery'));
    }
    public function gallery(){
        $images = Gallery::all();
        return view('frontend_views.gallery', compact('images'));
    }
    public function show_erasmus($slug){
        $project = Erasmus::where('slug',$slug)->firstOrFail();

        return view('frontend_views.documents.erasmus', compact('project'));
    }
    public function statut(){
        return view('frontend_views.documents.statut');
    }
    public function finance(){
        $finance = Documents::where('category_id', 1)->get();
        $uniqueYears = Documents::where('category_id', 1)
            ->orderBy('year', 'desc')
            ->distinct()
            ->pluck('year')
            ->toArray();
        return view('frontend_views.documents.finansijski_dokumenti', compact('finance', 'uniqueYears'));
    }
    // public function show_finance($year){
    //     $finance = Documents::where('year', $year)->get();

    //     return view('frontend_views.documents.show_finansiski_dokumenti', compact('finance'));
    // }
    public function show_single_finance($year,$slug){
        $document = Documents::where('year', $year)->where('slug', $slug)->firstOrFail();

        return view('frontend_views.documents.show_finance', compact('document'));
    }

    public function godisnaPrograma(){
        $documents = Documents::where('category_id', 2)->get();
        $uniqueYears = Documents::where('category_id', 2)
            ->orderBy('year', 'desc')
            ->distinct()
            ->pluck('year')
            ->toArray();

        return view('frontend_views.documents.godisna_programa', compact('documents', 'uniqueYears'));
    }
    public function showGodisnaPrograma(){

    }
    public function plan(){
        return view('frontend_views.documents.plan');
    }
}
