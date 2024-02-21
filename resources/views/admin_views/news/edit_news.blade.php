@extends('admin_views.layout.admin_layout')
@section('title', 'Admin Panel Home')

@section('content')
<div class="add">
    <a href="/admin/news">Cancel</a>
</div>
     <div class="form-container">
        <h2>Edit News</h2>
        <form method="POST" action="{{ route('admin.news.update', $news->id) }}" enctype="multipart/form-data">
            @csrf
            
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->title) }}">
            
            
                <label for="short_content">Short Content</label>
                <textarea class="form-control" id="short_content" name="short_content" rows="3">{{ old('short_content', $news->short_content) }}</textarea>
            
            
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="6" >{{ old('content', $news->content) }}</textarea>
           
            
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $news->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*"  value="{{ old('image', $news->image) }}">
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection