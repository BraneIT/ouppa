@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>{{$document->title}}</h1>
    </div>
</div>  
<div class="erasmus-wrapper">
    <div class="erasmus-container">
        <object data="{{ asset($document->file) }}#toolbar=0" type="application/pdf" width="100%" height="600px">
            
            <p>It appears you don't have a PDF plugin for this browser.
            No biggie... you can <a href="yourfile.pdf">click here to
            download the PDF file.</a></p>
        </object>
        {{-- <iframe src="{{ asset($document->file) }}#toolbar=0" title='SOME_TITLE' ></iframe> --}}
        {{-- <embed src="{{asset($project->path)}}#toolbar=0" type=""> --}}
        <a href="{{ asset($document->file) }}" download="{{$document->name}}">
            <button>Преузми ПДФ</button>
        </a>
    </div>
</div>

@endsection