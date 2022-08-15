@extends('layouts.mainFrame')
@section('title')
    {{ $tag->tag_slug }}
@endsection
@section('content')
    <h1>{{ $tag->name }}</h1>
    <div class="articles">
    @foreach($articles as $article)
        <div class="article">
            <a href="{{ route('article', $article->article_slug) }}">
                <h3>{{ $article->name }}</h3>
                <p class="tag-articles-description">{{ $article->short_description }}</p>
            </a>
        </div>
    @endforeach
    </div>
@endsection
