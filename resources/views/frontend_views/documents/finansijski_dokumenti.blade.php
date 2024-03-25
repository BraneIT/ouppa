@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>ФИНАНСИСКИ ДОКУМЕНТИ</h1>
    </div>
</div>  
<div class="erasmus-wrapper">
    @if(sizeof($documents)==0)
        <div class="documents-container">     
            <p>Тренутно нема објављених докумената</p>
        </div>
     @else 
   <?php $lastYear = null;
   $endYear = null;
   $lastYearForEndYears = null;?>
    <div class="documents-container">
        @foreach ($documents as $item)
        {{ var_dump($lastYear) }}
        @if($item->end_year !== NULL)
            @if ($lastYear !== $item->year || $endYear !== $item->end_year)
                <div class="year-container"><h1>{{$item->year}}/{{$item->end_year}}</h1></div>
                <a href="godisna_programa_za_rad_na_učilište_i_godišnji_i_polugodišnji izvestaji/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
                <?php $lastYearForEndYears = $item->year;
                     ?>
            @else

                <a href="godisna_programa_za_rad_na_učilište_i_godišnji_i_polugodišnji izvestaji/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
                <?php $lastYearForEndYears = $item->year;
                    var_dump($lastYearForEndYears); ?>
            @endif
        @else
        @if ($lastYear != $item->year && $item->end_year == NULL)
                    <div class="year-container"><h1>{{$item->year}}</h1></div>
                    <a href="godisna_programa_za_rad_na_učilište_i_godišnji_i_polugodišnji izvestaji/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
                    {{ $lastYear = $item->year; }}
                @else
                    
                    <a href="godisna_programa_za_rad_na_učilište_i_godišnji_i_polugodišnji izvestaji/{{ $item->category_id }}/{{$item->year}} /{{$item->slug}}">{{$item->title}} </a>
                    {{ $lastYear = $item->year; }}
                @endif
        @endif
        <?php
            
            $endYear = $item->end_year;
         ?>
        @endforeach

    </div>
    @endif
</div>

@endsection