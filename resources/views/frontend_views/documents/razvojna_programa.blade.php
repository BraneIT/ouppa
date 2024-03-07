@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>Развојна програма за работа на училиштето</h1>
    </div>
</div>  

<div class="erasmus-wrapper">
    <div class="documents-container">
        <div class="year-container"></div>
    @foreach($documents as $document)
        <a href="#">{{$document->title}}</a>
    @endforeach
</div>

@endsection