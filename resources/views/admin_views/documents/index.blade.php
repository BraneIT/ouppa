@extends('admin_views.layout.admin_layout')
@section('title', 'Documents')

@section('content')

<div class="add">
    <a href="/admin/documents/add">Add</a>
</div>
<h2 class="label">All documents categories</h2>
<div class="document-categories-container">
    @foreach($categories as $category)
        <div class="document-categories">
            <a href="/admin/documents/category/{{$category->id}}">{{$category->name}}</a>
        </div>
    @endforeach
</div>


@endsection