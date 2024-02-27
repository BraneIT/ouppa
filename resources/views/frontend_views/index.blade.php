@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
    {{--  --}}

    <div class="hero">
        <ul class="slider">
            <li class="slide">
                <img src="{{ asset('assets/images/slide1.jpg') }}" alt="Slide 1">
            </li>
            <li class="slide">
                <img src="{{ asset('assets/images/slide2.jpg') }}" alt="Slide 2">
            </li>
            <li class="slide">
                <img src="{{ asset('assets/images/slide3.jpg') }}" alt="Slide 3">
            </li>
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
            <a href="">
            Види ги сите новости</a>
        </div>
        <div class="news-container">
            @foreach($news as $item)
                <div class="news">
                    <div class="news-image-container">
                        <img src="{{$item->image}}" alt="" class="news-images">
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

    
    
@endsection
