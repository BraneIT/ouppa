@extends('frontend_views.layout.layout')

@section('title', 'Home Page')


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
{{-- 
<div class="col-md-6 mb-4">
                <div class="news-item">
                    <div class="news-image-container">
                        <img class="news-image" src="{{ $item->image }}" alt="{{ $item->title }}">
                    </div>
                    <div class="news-details">
                        <h3>{{ $item->title }}</h3>
                        <p class="date">{{ $item->created_at->format('d/M/Y') }}</p>
                        <p>{{ $item->short_content }}</p>
                    </div>
                </div>
            </div> --}}