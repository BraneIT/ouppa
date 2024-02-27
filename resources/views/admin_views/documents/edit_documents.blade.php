@extends('admin_views.layout.admin_layout')
@section('title', 'Documents')

@section('content')

<div class="add">
    <a href="/admin/documents">Cancel</a>
</div>
<div class="form-container">
    <h2>Edit document</h2>
    <form method="POST" enctype="multipart/form-data" action="{{route('update.documents', $document->id)}}">
        @csrf
            
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="title" value="{{ old('title', $document->title) }}" required>
            
        <label for="file">Select document (PDF or Word)</label>
        <input type="file" class="form-control-file" id="file" name="file" accept="application/pdf,.doc,.docx" value="{{ old('file', $document->file) }}" >

        <label for="category">Category</label>
        <select name="category_id" required>>
            <option value="">Select Category</option>
              @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $document->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <select name="year" id="" required>>
            <option value="">Select year</option>
            @for ($year = 2018; $year <= 2027; $year++)
                <option value="{{ $year }}" @if(old('year', $document->year) == $year) selected @endif>{{ $year }}</option>
            @endfor
        </select>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection