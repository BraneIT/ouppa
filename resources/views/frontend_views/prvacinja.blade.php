@extends('frontend_views.layout.layout')

@section("title", "Првачиња")

@section('content')
<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>Првачиња</h1>
    </div>
</div> 
<div class="erasmus-wrapper">
    <div class="documents-container">
@if($prvacinja)


    <div class="prvacinja-image-container">
        <img src="{{ asset($prvacinja->image_path) }}" alt="">
    </div>
    <div class="prvacinja-content">
        {!! $prvacinja->content !!}
    </div>

@else
<a>Тренутно нема објављених докумената</a>
@endif
</div>
</div>
@endsection