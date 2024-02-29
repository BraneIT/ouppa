@extends('admin_views.layout.admin_layout')
@section('title', 'Documents')

@section('content')

<div class="add">
    <a href="/admin/documents">Cancel</a>
</div>

<div class="form-container">
    <h2>Add Document</h2>
    <form method="POST" enctype="multipart/form-data" action="{{route('store.documents')}}">
        @csrf
            
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="title" required>
            
        <label for="file">Select document (PDF or Word)</label>
        <input type="file" class="form-control-file" id="file" name="file" accept="application/pdf,.doc,.docx" required>

        <label for="category">Category</label>
        <select name="category_id" required class="category">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
            
        <select name="year" id="" required class="year">
            <option value="">Select Year</option>
             @for ($year = 2016; $year <= 2030; $year++)
                <option value="{{ $year }}">{{ $year }}</option>
            @endfor
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection