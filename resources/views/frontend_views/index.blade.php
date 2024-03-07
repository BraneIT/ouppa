@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
    {{--  --}}

    <section class="hidden" id="hero">
        
        
        <img src="{{ asset('assets/images/skola-min.png') }}" alt="Slide 1">
        <div class="hero-info">
            <p>Добродојдовте на сајт</p>
            <h1>Петар Поп Арсов</h1>
        </div>   
            
        
    </section>
    <section id="navigator-wrapper" class="hidden">
        <div class="navigator-container">
            
            <a href=""><x-tni-school class="icons"/> НАСТАВА</a> 
            <a href=""><x-monoicon-document class="icons"/> ДОКУМЕНТИ</a>
            <a href=""><x-antdesign-project-o class="icons"/>ПРОЕКТИ</a>
            <a href=""><x-entypo-news class="icons"/>НОВОСТИ</a>
        </div>
    </section>
    <section id="news-wrapper" class="hidden">
        <div class="news-label-container">
            <h1>НОВОСТИ</h1>
            <a href="" class="all-news">
            Види ги сите новости</a>
        </div>
        <div class="news-container hidden">
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
                        <div class="date"> 
                            <p>{{ $item->created_at->format('d/n/Y') }}</p>
                        </div>
                        
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->short_content }}</p>
                    </div>
                    <div class="news-button">

                        <a href="">Прочитај повеке</a>
                    </div>
                </div>
            @endforeach
            .<a href="" class="all-news-phone">
            Види ги сите новости</a>
        </div>
    </section>
    <section id="gallery" class="hidden">
        <h1>ГАЛЕРИЈА</h1>
        <div class="gallery-index hidden">
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
        
    </section>
    <section id="video" class="hidden">
        <div class="video-label">
            <h1>Детска химна за „Карпош“ кој го сакаме</h1>
        </div>
        <object width="425" height="350" data="http://www.youtube.com/v/mYGZfv4GyS8" type="application/x-shockwave-flash" class="hidden"><param name="src" value="http://www.youtube.com/v/mYGZfv4GyS8" /></object>
    </section>
    
    
@endsection
