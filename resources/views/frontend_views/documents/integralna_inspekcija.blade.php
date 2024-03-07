@extends('frontend_views.layout.layout')

@section('title', 'Дома')


@section('content')
<div class="pages-intro">
    <div class="pages-intro-container">
        <h1>ИНТЕГРАЛНА ИНСПЕКЦИЈА</h1>
    </div>
</div>  
<div class="erasmus-wrapper">
       
     @if(empty($documents))
     <div class="documents-container">
        
            <p>Тренутно нема објављених докумената</p>
     </div>
    @else 
    @foreach($uniqueYears as $year)
    <div class="documents-container">
        
        <div class="year-container"><h1>{{$year}}</h1></div>
       
            @foreach($documents as $item )
                
                @if($item->year === $year)
                
                    <a href="godisna_programa_za_rad_na_učilište_i_godišnji_i_polugodišnji izvestaji/{{$item->year}}/{{$item->slug}}" >{{$item->title}}</a>
                    
                
                @endif
            @endforeach
        
       
    </div>
    
</div>    
@endforeach
@endif
</div>



@endsection