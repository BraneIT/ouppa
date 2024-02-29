@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')

<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>{{$project->name}} {{$project->start_date}}-{{$project->end_date}}</h1>
    </div>
</div>  
<div class="erasmus-wrapper">
    <div class="erasmus-container">
        <object data="{{ asset($project->path) }}#toolbar=0" type="application/pdf" width="100%" height="600px">
            <p>It appears you don't have a PDF plugin for this browser.
            No biggie... you can <a href="yourfile.pdf">click here to
            download the PDF file.</a></p>
        </object>
        {{-- <embed src="{{asset($project->path)}}#toolbar=0" type=""> --}}
        <a href="{{ asset($project->path) }}" download="{{$project->name}}">
            <button>Преузми ПДФ</button>
        </a>
    </div>
</div>


@endsection