<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Erasmus;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Documents;
use App\Models\Takmicenja;
use App\Models\Regulations;
use Illuminate\Http\Request;
use App\Models\DocumentCategories;
use App\Models\GodisnjiIzvjestaji;
use App\Services\DocumentsService;
use App\Models\FinansiskiDokumenti;
use App\Models\IntegralnaInspekcija;
use App\Models\IzvjestajOdSamoevaluacija;
use App\Models\RazvojnaPrograma;

class FrontendController extends Controller
{   
 
    public function index()
    {
        // Fetch news and galleries separately but simultaneously
        $news = News::latest()->take(6)->get();
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
        $data = FinansiskiDokumenti::where('category_id', 1)
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
        
        $documents = GodisnjiIzvjestaji::orderBy('year', 'desc')->get();
        $uniqueYears = $documents->pluck('year')->unique()->toArray();
        return view('frontend_views.documents.godisna_programa', compact('documents', 'uniqueYears'));
    }
    public function razvojnaPrograma(){
        $documents = RazvojnaPrograma::select('year', 'slug', 'title')->get();
        return view('frontend_views.documents.razvojna_programa', compact('documents'));
    }
    public function integralnaInspekcija(){
        $data = IntegralnaInspekcija::select('year', 'slug', 'title')->get();

        $documents = $data;
        $uniqueYears = $data->pluck('year')->unique()->toArray();
        return view('frontend_views.documents.integralna_inspekcija', compact('documents', 'uniqueYears'));
    }
    public function plan(){
        return view('frontend_views.documents.plan');
    }
    public function evaluacija(){
        $data = IzvjestajOdSamoevaluacija::select('year', 'slug', 'title')->get();
            
        $documents = $data;
        $uniqueYears = $data->pluck('year')->unique()->toArray();
        return view('frontend_views.documents.izvjestaj_od_samoevaluacija', compact('documents', 'uniqueYears'));
    }
    public function regulations(){
        $regulations = Regulations::select('name', 'slug')->get();
        return view('frontend_views.documents.regulations', compact('regulations'));
    }
    public function showRegulations($slug){
        $regulation = Regulations::where('slug', $slug)->first();
        return view('frontend_views.documents.show_regulations', compact('regulation'));
    }
    public function rakovoditeljiNaParalelki(){
        return view('frontend_views.students.rukovoditelji_na_paralelki');
    }
    public function showContact(){
        return view('frontend_views.contact');
    }
    public function showCompetitions()  {
        $competitions = Takmicenja::select('year', 'slug', 'title')->get();
         $uniqueYears = $competitions->pluck('year')->unique()->toArray();
        return view('frontend_views.natpravari', compact('competitions', 'uniqueYears'));
        
    }
    

}
