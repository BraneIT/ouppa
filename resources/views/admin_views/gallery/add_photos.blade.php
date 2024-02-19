@extends('admin_views.layout.admin_layout')
@section('title', 'Admin Panel Home')

@section('content')
<div class="add">
    <a href="/admin/gallery">Cancel</a>
</div>
    <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="image">Upload Image:</label>
        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
    </div>

    <button type="submit" class="btn btn-primary">Upload Image</button>
</form>
@endsection