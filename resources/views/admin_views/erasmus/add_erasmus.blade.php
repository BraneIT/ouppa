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
        <input type="text" class="form-control" id="start_date" name="start_date" required>

        <label for="end_date">End year</label>
        <input type="text" class="form-control" id="end_date" name="end_date" required>

        <button type="submit" id="submit-button" class="button red-button">Submit</button>
    </form>
</div>
@endsection