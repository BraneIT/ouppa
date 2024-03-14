@extends('frontend_views.layout.layout')

@section('title', 'Natpravari')

@section('content')
<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>Натправари</h1>
    </div>
</div>    
 <div class="erasmus-wrapper">
        @if (empty($competitions))
        {{ var_dump($competitions) }} 
            <div class="documents-container">

                <p>Тренутно нема објављених докумената</p>
            </div>
        @else
            @foreach ($uniqueYears as $year)
                <div class="documents-container">

                    <div class="year-container">
                        <h1>{{ $year . '/' . $year + 1 }}</h1>
                    </div>

                    @foreach ($competitions as $item)
                        @if ($item->year === $year)
                            <a href="ucestvo_na_natprevari_i_ostali_nagradi/{{ $item->year .'-'.$item->year+1 }}/{{ $item->slug }}"
                                cla>{{ $item->title }}</a>
                        @endif
                    @endforeach


                </div>

    </div>
    @endforeach
    @endif
    </div>

@endsection