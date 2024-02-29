<?php

namespace App\Services;
use App\Models\News;

class NewsService
{
    public function createNews(array $data)
    {

        $news = new News();
        // Upload image and get its path
        if (isset($data['image'])) {
        $imagePath = $this->uploadImage($data['image']);
        $news->image = $imagePath;
        } 
        
        // Create a new news item
        
        $news->title = $data['title'];
        $news->short_content = $data['short_content'];
        $news->content = $data['content'];
        $news->category_id = $data['category_id'];

        
        $news->save();

        return $news;
    }
     public function updateNews($id, array $data)
    {
        $news = News::findOrFail($id);

        // Update only the fields that are provided in the data
        $news->fill($data)->save();

        return $news;
    }

    private function uploadImage($image)
    {
        // Handle image upload and storage, return the image path
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/news/'), $imageName);
        return 'images/news/' . $imageName;
    }



}