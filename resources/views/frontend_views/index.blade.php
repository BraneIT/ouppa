@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
    {{--  --}}

    <div class="hero">
        
        <ul class="slider">
            <li class="slide active">
                <img src="{{ asset('assets/images/skola.png') }}" alt="Slide 1">
                
            </li>
            
            {{-- <li class="slide">
                <img src="{{ asset('assets/images/slide2.jpg') }}" alt="Slide 2">
            </li>
            
            <li class="slide">
                <img src="{{ asset('assets/images/slide3.jpg') }}" alt="Slide 3">

            </li> --}}
        </ul>
        
    </div>
    <div class="navigator-wrapper">
        <div class="navigator-container">
            
            <a href=""><x-tni-school class="icons"/> НАСТАВА</a> 
            <a href=""><x-monoicon-document class="icons"/> ДОКУМЕНТИ</a>
            <a href=""><x-antdesign-project-o class="icons"/>ПРОЕКТИ</a>
            <a href=""><x-entypo-news class="icons"/>НОВОСТИ</a>
        </div>
    </div>
    <div class="news-wrapper">
        <div class="news-label-container">
            <h1>НОВОСТИ</h1>
            <a href="" class="all-news">
            Види ги сите новости</a>
        </div>
        <div class="news-container">
            @foreach($news as $item)
                <div class="news">
                    <div class="news-image-container">
                        @if($item->image === "")
                            <img src="{{ asset('images/logo.png') }}" class="default-image">
                        @else
                            <img src="{{$item->image}}" alt="" class="news-images">
                        @endif
                        
                    </div>
                    <div class="news-details">
                        <h3>{{ $item->title }}</h3>
                        <p class="date">{{ $item->created_at->format('d/M/Y') }}</p>
                        <p>{{ $item->short_content }}</p>
                    </div>
                </div>
                
            @endforeach
            
        </div>
    </div>
    <div class="gallery">
        <h1>ГАЛЕРИЈА</h1>
        <div class="gallery-index">
            @foreach($gallery as $item)
                <figure class="card">
                    <img
                    src="{{$item->image}}"
                    
                    />
                </figure>
            @endforeach
                
        </div>
        <a href="/gallery" class="all-news" style="margin-top: 20px">
            Види ги сите слики</a>
        
    </div>
    <div class="video">
        <div class="video-label">
            <h1>Детска химна за „Карпош“ кој го сакаме</h1>
        </div>
        <object width="425" height="350" data="http://www.youtube.com/v/mYGZfv4GyS8" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/mYGZfv4GyS8" /></object>
    </div>
    
    
@endsection
