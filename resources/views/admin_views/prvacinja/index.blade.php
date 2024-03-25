@extends('admin_views.layout.admin_layout')

@section('title', "Првачиња")

@section('content')
<div class="add">
    <a href="/admin/prvacinja/add">Add</a>
</div>
@if($prvacinja)

<div class="prvacinja-wrapper">
    <div class="prvacinja-image-container">
        <img src="{{ asset($prvacinja->image_path) }}" alt="">
    </div>
    <div class="prvacinja-content">
        {!! $prvacinja->content !!}
    </div>
    <form action="/admin/prvacinja/delete/{{ $prvacinja->id }}" method="POST" class='delete'>
        @csrf
        @method('DELETE')
        <button type="submit" class="button red-button">DELETE</button>
    </form>
</div>
@else
<p>No data found.</p>
@endif
@endsection