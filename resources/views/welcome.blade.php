@extends('layouts.mainFrame')
@section('title', 'User-Panel')
@section('content')
    <h3>Categories</h3>
    @foreach($categories as $category)
        <div class="category">
            <a href="{{ route('category', $category->category_slug) }}">
            <h3>{{ $category->name }}</h3>
            <p>{{ $category->description }}</p>
            </a>
        </div>
    @endforeach
    <br/><h3>#Tags</h3>
    <div id="tags">
        @foreach($tags as $tag)
            <a href="{{ route('tag', $tag->tag_slug) }}">{{ $tag->name }}</a>
        @endforeach
    </div>
@endsection
