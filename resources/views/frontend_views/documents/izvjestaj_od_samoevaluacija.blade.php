@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
    <div class="pages-intro">
        <div class="pages-intro-container">
            <h1>ИЗВЈЕШТАЈ ОД САМОЕВАЛУАЦИЈА</h1>
        </div>
    </div>
    <div class="erasmus-wrapper">
        @if(sizeof($documents)==0)
            <div class="documents-container">
                <p>Тренутно нема објављених докумената</p>
        </div>
        @else 
    
    
        @foreach ($documents as $item)
        @if($item->end_year !== NULL)
        <div class="documents-container">
            <div class="year-container"><h1>{{$item->year}}/{{$item->end_year}}</h1></div>
            <a href="godisna_programa_za_rad_na_učilište_i_godišnji_i_polugodišnji izvestaji/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
        </div>
        @else
        <div class="documents-container">
            <div class="year-container"><h1>{{$item->year}}</h1></div>
            <a href="godisna_programa_za_rad_na_učilište_i_godišnji_i_polugodišnji izvestaji/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
            </div>
        @endif
        @endforeach
        
        @endif
    </div>    
@endsection
