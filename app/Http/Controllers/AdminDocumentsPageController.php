<?php

namespace App\Http\Controllers;

use App\Models\Erasmus;
use Illuminate\Http\Request;

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
        return view('admin_views.documents.index');
    }
}
