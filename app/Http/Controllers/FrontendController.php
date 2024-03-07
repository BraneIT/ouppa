<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Erasmus;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Documents;
use Illuminate\Http\Request;
use App\Models\DocumentCategories;
use App\Models\Regulations;
use App\Services\DocumentsService;

class FrontendController extends Controller
{   
 
    public function index()
    {
        // Fetch news and galleries separately but simultaneously
        $news = News::take(6)->get();
        $galleryQuery = Gallery::take(5)->get();

        // Execute both queries simultaneously
        $results = [
            'news' => $news,
            'gallery' => $galleryQuery,
        ];

        return view('frontend_views.index', $results);
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
        $data = Documents::where('category_id', 1)
            ->orderBy('year', 'desc')
            ->get();

        $finance = $data;
        $uniqueYears = $data->pluck('year')->unique()->toArray();
        return view('frontend_views.documents.finansijski_dokumenti', compact('finance', 'uniqueYears'));
    }
    // public function show_finance($year){
    //     $finance = Documents::where('year', $year)->get();

    //     return view('frontend_views.documents.show_finansiski_dokumenti', compact('finance'));
    // }
    public function show_single_finance($year,$slug){
        $document = Documents::where('year', $year)->where('slug', $slug)->firstOrFail();

        return view('frontend_views.documents.show_documents', compact('document'));
    }

    public function godisnaPrograma(){
        $data = Documents::where('category_id', 2)
            ->orderBy('year', 'desc')
            ->get();

        $documents = $data;
        $uniqueYears = $data->pluck('year')->unique()->toArray();
        return view('frontend_views.documents.godisna_programa', compact('documents', 'uniqueYears'));
    }
    public function razvojnaPrograma(){
        $documents = Documents::where('category_id', 3)->get();
        return view('frontend_views.documents.razvojna_programa', compact('documents'));
    }
    public function integralnaInspekcija(){
        $data = Documents::where('category_id', 5)
            ->orderBy('year', 'desc')
            ->get();

        $documents = $data;
        $uniqueYears = $data->pluck('year')->unique()->toArray();
        return view('frontend_views.documents.integralna_inspekcija', compact('documents', 'uniqueYears'));
    }
    public function plan(){
        return view('frontend_views.documents.plan');
    }
    public function evaluacija(){
        $data = Documents::where('category_id', 4)
            ->orderBy('year', 'desc')
            ->get();

        $documents = $data;
        $uniqueYears = $data->pluck('year')->unique()->toArray();
        return view('frontend_views.documents.izvjestaj_od_samoevaluacija', compact('documents', 'uniqueYears'));
    }
    public function regulations(){
        $regulations = Regulations::all();
        return view('frontend_views.documents.regulations', compact('regulations'));
    }
    public function showRegulations($slug){
        $regulation = Regulations::where('slug', $slug)->firstOrFail();
        return view('frontend_views.documents.show_regulations', compact('regulation'));
    }
    public function showContact(){
        return view('frontend_views.contact');
    }

}
