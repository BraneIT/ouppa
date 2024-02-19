@extends('admin_views.layout.admin_layout')
@section('title', 'Admin Panel Home')

@section('content')

<div class="add">
    <a href="/admin/news/add">Add</a>
</div>

<form action="{{ route('search.news') }}" method="GET" class="search">
    <input type="text" name="search">
    <button type="submit">Search</button>
</form>

<h2 class="label">All News</h2>
<div class="news-list">
    
    @if ($news->count() > 0)
            @foreach ($news as $item)
                <div class="news-container">
                    <h3>{{ $item->title }}</h3>
                    <div class="buttons-wrapper">
                        <a href="{{ route('admin.news.edit', ['id' => $item->id]) }}">Edit</a>
                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST">
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