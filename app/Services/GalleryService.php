<?php

namespace App\Services;

class GalleryService{

    public function storeImage($image){
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('images/gallery'), $imageName);
    return '/images/gallery/' . $imageName; // 
}
}