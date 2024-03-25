<?php

namespace App\Http\Controllers;

use App\Models\Prvacinja;
use Illuminate\Http\Request;
use App\Services\GalleryService;

class PrvacinjaController extends Controller
{
      protected $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }
    public function show(){
        $prvacinja = Prvacinja::select("image_path", 'content', 'id')->first();
        return view('admin_views.prvacinja.index', compact('prvacinja'));
    }
    public function create(){
        return view('admin_views.prvacinja.add_prvacinja');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'image_path' => 'required',
            'content' => 'required'
        ],[
            'image_path.required' => 'Please upload an image.',
            'content.required' => 'Please provide the content.',
        ]);
        
        $imageFile = $request->file($validatedData["image_path"]);
        var_dump($validatedData['image_path']);
        $imagePath = $this->galleryService->storeImage($validatedData['image_path']);
        $data = new Prvacinja();
        $data->image_path = $imagePath;
        var_dump($data->image_path);
        $data->content = $validatedData['content'];

        $data->save();
        return redirect('/admin/prvacinja')->with('success', 'News updated successfully!');
    }
    public function destroy($id){
        $data = Prvacinja::findOrFail($id);

        $data->delete();

        return redirect('/admin/prvacinja')->with('success', 'Deleted succesfully');

    }

}
