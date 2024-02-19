@extends('admin_views.layout.admin_layout')
@section('title', 'Galery')

@section('content')
<div class="add">
    <a href="/admin/gallery/add">Add</a>
</div>
<h2 class="label">All images</h2>
<div class="gallery">
    @foreach($gallery as $image)
        <div class="image-container">
            <img src="{{ asset($image->image) }}" alt="Image">
            <form method="POST" action="{{ route('gallery.destroy', $image->id) }}" >
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</div>
    
@endsection