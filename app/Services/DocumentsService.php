<?php

namespace App\Services;

use App\Models\Erasmus;
use Illuminate\Http\Request;

class DocumentsService{


    public function storeErasmus(array $data){
        $documentPath = $this->saveErasmusDocument($data['file']);
        $erasmus = new Erasmus();

        $erasmus->name = $data['name'];
        $erasmus->path = $documentPath;
        $erasmus->start_date = $data['start_date'];
        $erasmus->end_date = $data['end_date'];

        $erasmus->save();
        
        return $erasmus;
    }

       public function updateErasmus($id, array $data)
    {
        $news = Erasmus::findOrFail($id);

        // Update only the fields that are provided in the data
        $news->fill($data)->save();

        return $news;
    }

     public function saveErasmusDocument($file)
    {
        // Define the directory where you want to store the files
        $directory = 'assets/erasmus';

        // Generate a unique name for the file
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

        // Move the file to the storage location
        $file->move(public_path($directory), $fileName);

        // Return the path to the stored file
        return $directory . '/' . $fileName;
    }
    
}