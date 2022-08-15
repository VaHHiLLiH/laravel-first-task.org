@extends('layouts.mainFrame')
@section('title')
    {{ $article->article_slug }}
@endsection
@section('content')
    <h1>{{ $article->name }}</h1>
    <p class="article-description">{{ $article->description }}</p>
    <div class="article-tags small">
    @foreach($tags as $tag)
        <a href="{{ route('tag', $tag->tag_slug) }}">{{ $tag->name }}</a>
    @endforeach
    </div>
@endsection
