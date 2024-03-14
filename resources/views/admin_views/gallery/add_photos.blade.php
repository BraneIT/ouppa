@extends('admin_views.layout.admin_layout')
@section('title', 'Admin Panel Home')

@section('content')
<div class="add">
    <a href="/admin/gallery">Cancel</a>
</div>
    <form id="galleryForm" method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
    @csrf

    
        <div class="gallery-add">
        <label for="image">Upload Image</label>
        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" style="display: none;">
                <button type="button" id="imageButton" class="blue-button button-gallery">Choose Image</button>
                <p class="error-field" style="display: none;"></p>
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
    

    <button type="submit" id="uploadButton" class="button-gallery red-button">Upload Image</button>
</form>
@endsection