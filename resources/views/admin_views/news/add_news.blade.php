@extends('admin_views.layout.admin_layout')
@section('title', 'Admin Panel Home')

@section('content')
   
<div class="add">
    <a href="/admin/news">Cancel</a>
</div>
     <div class="form-container">
        <h2>Add News</h2>
        <form method="POST" class="news-form" enctype="multipart/form-data">
            @csrf
            
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
                
            
            
                <label for="short_content">Short Content</label>
                <textarea class="form-control" id="short_content" name="short_content" rows="3" required></textarea>
                
            
            
                <label for="content">Content</label>
                <textarea class="form-control" id="editor" name="content" ></textarea>
                

                
            
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" style="display: none;">
                <button type="button" id="imageButton" class="blue-button button">Choose Image</button>
                
            
            <button type="submit" id="submit-button" class="red-button button">Submit</button>
        </form>
    </div>


@endsection