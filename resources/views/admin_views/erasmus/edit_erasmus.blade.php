@extends('admin_views.layout.admin_layout')
@section('title', 'Erasmus+')

@section('content')
<div class="add">
    <a href="/admin/erasmus">Cancel</a>
</div>

<div class="form-container">
    <h2>Edit Erasmus+ project</h2>
    <form method="POST" enctype="multipart/form-data" action="{{ route('erasmus.update', $erasmus->id) }}">
        @csrf
            
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('title', $erasmus->name) }}" >
            
        <label for="file">Select Erasmus+ document (PDF or Word)</label>
        <input type="file" class="form-control-file" id="file" name="file" accept="application/pdf,.doc,.docx" value="{{old('title', $erasmus->path) }}">

        <label for="start_date">Start year</label>
        <input type="text" class="form-control" id="start_date" name="start_date" value="{{old('title', $erasmus->start_date) }}">

        <label for="end_date">End year</label>
        <input type="text" class="form-control" id="end_date" name="end_date" value="{{old('title', $erasmus->end_date) }}">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection