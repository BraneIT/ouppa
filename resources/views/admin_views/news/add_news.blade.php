@extends('admin_views.layout.admin_layout')
@section('title', 'Admin Panel Home')

@section('content')
<div class="add">
    <a href="/admin/news">Cancel</a>
</div>
     <div class="form-container">
        <h2>Add News</h2>
        <form method="POST"  enctype="multipart/form-data">
            @csrf
            
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            
            
                <label for="short_content">Short Content</label>
                <textarea class="form-control" id="short_content" name="short_content" rows="3" required></textarea>
            
            
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
           
            
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="file" name="image" required accept="image/*">
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection