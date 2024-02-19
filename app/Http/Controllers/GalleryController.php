<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

use Illuminate\Http\Request;
use App\Services\GalleryService;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
     protected $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }
    public function store(Request $request){
    $validate = $request->validate([
        'image'=> 'required|image|max:2048',
    ]);

    $imageUrl = $this->galleryService->storeImage($validate['image']); // Get the image URL
    Gallery::create(['image' => $imageUrl]); // Save the image URL to the database
    return redirect('/admin/gallery');
    }
      public function destroy($id)
    {
        // Find the image by ID
        $image = Gallery::findOrFail($id);

        // Get the full path to the image file in the public folder
        $imagePath = public_path($image->image);

        // Check if the file exists before attempting to delete it
        if (File::exists($imagePath)) {
            // Delete the image file from the public folder
            File::delete($imagePath);
        }

        // Delete the image record from the database
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}
