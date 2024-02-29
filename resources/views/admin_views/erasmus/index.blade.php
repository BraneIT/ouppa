@extends('admin_views.layout.admin_layout')
@section('title', 'Erasmus+')

@section('content')
<div class="add">
    <a href="/admin/erasmus/add">Add</a>
</div>

<h2 class="label">All Erazmus+ projects</h2>
<div class="news-list">
  @if ($erasmus->count() > 0)
            @foreach ($erasmus as $item)
                <div class="news-container">
                    <h3>{{ $item->name }} {{$item->start_date}} - {{$item->end_date}}</h3>
                    <div class="buttons-wrapper">
                        <a href="{{ route('erasmus.edit.show', ['id' => $item->id]) }}">Edit</a>
                    <form action="{{ route('erasmus.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    </div>
                </div>
            @endforeach
        
    @else
        <p>No news found.</p>
    @endif
</div>

@endsection