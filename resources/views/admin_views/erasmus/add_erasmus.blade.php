@extends('admin_views.layout.admin_layout')
@section('title', 'Erasmus+')

@section('content')
<div class="add">
    <a href="/admin/erasmus">Cancel</a>
</div>

<div class="form-container">
    <h2>Add Erasmus+ project</h2>
    <form method="POST" enctype="multipart/form-data" class="erasmus-form" action="">
        @csrf
            
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
            
        <label for="file">Select Erasmus+ document (PDF or Word)</label>
        <input type="file" class="form-control-file" id="document" name="file" accept="application/pdf,.doc,.docx" style="display: none;" required>
        
                <button type="button" id="documentButton" class="red-button button
                ">Choose document</button>
                
        <label for="start_date">Start year</label>
         <select name="start_date" id="start_date" required class="year">
            <option value="">Select Year</option>
             @for ($year = 2016; $year <= 2030; $year++)
                <option value="{{ $year }}">{{ $year }}</option>
            @endfor
        </select>

        <label for="end_date">End year</label>
         <select name="end_date" id="end_date" required class="year">
            <option value="">Select Year</option>
             @for ($year = 2016; $year <= 2030; $year++)
                <option value="{{ $year }}">{{ $year }}</option>
            @endfor
        </select>

        <button type="submit" id="submit-button" class="button red-button">Submit</button>
    </form>
</div>
@endsection