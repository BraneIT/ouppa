@extends('admin_views.layout.admin_layout')

@section('title', "Првачиња")

@section('content')
<div class="add">
    <a href="/admin/prvacinja">Cancel</a>
</div>
<form action="" class="flex" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Image:</label>
    <input type="file" class="form-control-file" id="image" name="image_path" accept="image/*" style="display: none;">
                <button type="button" id="imageButton" class="blue-button button">Choose Image</button>
    <label>Content</label>
    <textarea class="form-control" id="editor" name="content" ></textarea>

    <button type="submit" class="red-button button">Submit</button>
</form>
@endsection