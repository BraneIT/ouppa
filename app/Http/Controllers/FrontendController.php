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
use App\Models\Prvacinja;
use App\Models\RazvojnaPrograma;
use App\Services\FrontendService;

class FrontendController extends Controller
{   
    protected $service;
    public function __construct( FrontendService $service)
    {
        $this-> service = $service;
    }

    public function index()
    {
        // Fetch news and galleries separately but simultaneously
        $news = News::latest()->take(6)->get();
        $galleryQuery = Gallery::take(4)->get();

        // Execute both queries simultaneously
        $results = [
            'news' => $news,
            'gallery' => $galleryQuery,
        ];

        return view('frontend_views.index', $results);
    }
    public function gallery(){
        $images = Gallery::select('image')->get();
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
        $documents = $this->service->GetDocuments(FinansiskiDokumenti::class);
        return view('frontend_views.documents.finansijski_dokumenti', compact('documents'));
    }
    // public function show_finance($year){
    //     $finance = Documents::where('year', $year)->get();

    //     return view('frontend_views.documents.show_finansiski_dokumenti', compact('finance'));
    // }
    public function show_single_finance($category_id,$year,$slug){
        switch ($category_id) {
            case 1:
                $document =FinansiskiDokumenti::where('year', $year)->where('slug', $slug)->firstOrFail();
                break;
            case 2:
                $document =GodisnjiIzvjestaji::where('year', $year)->where('slug', $slug)->firstOrFail();
                break;
            case 3:
                $document =RazvojnaPrograma::where('year', $year)->where('slug', $slug)->firstOrFail();
                break;
            case 4:
                $document =IzvjestajOdSamoevaluacija::where('year', $year)->where('slug', $slug)->firstOrFail();
                break;
            case 5:
                $document = IntegralnaInspekcija::where('year', $year)->where('slug', $slug)->firstOrFail();
                break;
            case 6:
                $document = Takmicenja::where('year', $year)->where('slug', $slug)->firstOrFail();
                break;
            
            default:
                // Handle invalid category_id
                return null;
        }
        // $document = Documents::where('year', $year)->where('slug', $slug)->firstOrFail();

        return view('frontend_views.documents.show_documents', compact('document'));
    }

    public function godisnaPrograma(){

       $documents = $this->service->GetDocuments(GodisnjiIzvjestaji::class);
       $data = $documents;
       $uniqueYears = $this->service->GetUniqueYears($data);
        return view('frontend_views.documents.godisna_programa', compact('documents', 'uniqueYears'));
    }
     // $documents = GodisnjiIzvjestaji::orderBy('year', 'desc')->get();

        // // Group documents by year
        // $groupedDocuments = $documents->groupBy('year');

        // // Sort groups by year in descending order
        // $groupedDocuments = $groupedDocuments->sortKeysDesc();

        // // Sort each group by end_year if it exists
        // $sortedDocuments = collect();
        // foreach ($groupedDocuments as $year => $group) {
        //     if ($group->first()->end_year !== null) {
        //         $group = $group->sortByDesc('end_year');
        //     }
        //     $sortedDocuments = $sortedDocuments->merge($group);
        // }
        // $documents = GodisnjiIzvjestaji::orderBy('year', 'desc')->get();
        // $uniqueYears = $documents->pluck('year')->unique()->toArray();
        // $endYears = $documents->pluck('end_year')->unique()->toArray();
        // rsort($uniqueYears);
        // rsort($endYears);
    public function razvojnaPrograma(){
        $documents = $this->service->GetDocuments(RazvojnaPrograma::class);
        return view('frontend_views.documents.razvojna_programa', compact('documents'));
    }
    public function integralnaInspekcija(){
       $documents = $this->service->GetDocuments(integralnaInspekcija::class);
        return view('frontend_views.documents.integralna_inspekcija', compact('documents'));
    }
    public function plan(){
        return view('frontend_views.documents.plan');
    }
    public function evaluacija(){
        $documents = $this->service->GetDocuments(IzvjestajOdSamoevaluacija::class);
        return view('frontend_views.documents.izvjestaj_od_samoevaluacija', compact('documents'));
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
    public function showCompetitions($year)  {
        // $documents = Takmicenja::all();
        $documents = Takmicenja::where('year', $year)->get();
        return view('frontend_views.natpravari', compact('documents'));
        
    }
    public function misijaIVizija(){
        return view('frontend_views.za_nas.misija_i_vizija');
    }
    public function news(){
        $news = News::orderBy('created_at', 'desc')->get();
        return view('frontend_views.news', compact('news'));
    }
    
    public function prvacinja(){
        $prvacinja = Prvacinja::select("image_path", 'content')->first();
        return view('frontend_views.prvacinja', compact('prvacinja'));
    }

    public function publicInformations(){
        return view('frontend_views.public_informations');
    }
}
