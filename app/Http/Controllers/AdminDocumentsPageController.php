<?php

namespace App\Http\Controllers;

use App\Models\Erasmus;
use App\Models\Documents;
use Illuminate\Http\Request;
use App\Models\DocumentCategories;
use League\CommonMark\Node\Block\Document;

class AdminDocumentsPageController extends Controller
{
    public function index_erasmus(){

        $erasmus = Erasmus::all();
        return view('admin_views.erasmus.index', compact('erasmus'));
    }
    public function show_add_erasmus(){
        return view('admin_views.erasmus.add_erasmus');
    }
    public function edit_erasmus($id){
        $erasmus = Erasmus::findOrFail($id);
        
        return view('admin_views.erasmus.edit_erasmus', compact('erasmus'));
    }
    public function index_documents(){
        $documents = Documents::all();
        $categories = DocumentCategories::all();

        return view('admin_views.documents.index', compact('categories'));
    }
    public function create_documents(){
        $categories = DocumentCategories::all();
        return view('admin_views.documents.add_documents', compact('categories'));
    }
    public function documentsByCategories($id){
        $category = DocumentCategories::findOrFail($id);
        $documents = Documents::where('category_id', $id )->get();
        return view('admin_views.documents.documents_by_categories', compact('category', 'documents'));
    }
    public function editDocuments($id){
        $document = Documents::findOrFail($id);
        $categories = DocumentCategories::all();
        return view('admin_views.documents.edit_documents', compact('document','categories'));
    }
}
