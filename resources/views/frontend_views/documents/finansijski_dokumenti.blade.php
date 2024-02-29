@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>ФИНАНСИСКИ ДОКУМЕНТИ</h1>
    </div>
</div>  
<div class="erasmus-wrapper">
    
@foreach($uniqueYears as $year)
    <div class="documents-container">
        
        <div class="year-container"><h1>{{$year}}</h1></div>
         @foreach($finance as $item )
         @if($item->year === $year)
        
            <a href="/finansiski_dokumenti/{{$item->year}}/{{$item->slug}}" cla>{{$item->title}}</a>
            
        
        @endif
    @endforeach
       
    </div>
@endforeach

</div>


@endsection