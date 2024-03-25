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
        <input type="text" class="form-control" id="documents-title" name="title" required>
            
        <input type="file" class="form-control-file" id="document" name="file" accept="application/pdf,.doc,.docx" style="display: none;" required>
        
        <button type="button" id="documentButton" class="red-button button">Choose document</button>
        
                
                

        <label for="category">Category</label>
        <select name="category_id" required class="category">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        
        <label>Start year</label>
        <select name="year" id="year" required class="year">
            <option value="">Select Year</option>
             @for ($year = 2016; $year <= 2030; $year++)
                <option value="{{ $year }}">{{ $year }}</option>

            @endfor
        </select>
     
        
            <label for="end_year">Year of end</label>
           
            <select name="end_year" id="end_year" class="year">
                <option value="">Select Year</option>
                
            </select>
      

        <button type="submit" id="submit-documents" class="button red-button">Submit</button>
    </form>
</div>
@endsection