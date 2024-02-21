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

    <div class="location-warpper">
        <div class="location-container">
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2964.7146953236943!2d21.387743300000004!3d42.00639820000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1354147111727d33%3A0xb985a47630bbc8af!2sPetar%20Pop%20Arsov%20Elementary%20School!5e0!3m2!1ssr!2smk!4v1708513104578!5m2!1ssr!2smk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="location-info">
            <p>Адреса на училиште</p>
            <h2>ТРИФУН БУЗЕВ бр. 2</h2>
            <p>Карпош IV - Скопје </p>
        </div>
        </div>
    </div>
    
@endsection
