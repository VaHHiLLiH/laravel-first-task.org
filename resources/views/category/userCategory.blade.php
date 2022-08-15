@extends('layouts.mainFrame')
@section('title')
    {{ $category->category_slug }}
@endsection
@section('content')
    @foreach($articles as $article)
        <div class="article">
            <a href="{{ route('article', $article->article_slug) }}">
                <h3>{{ $article->name }}</h3>
                <p>{{ $article->short_description }}</p>
            </a>
            @foreach($article->tags as $tag)
                <a href="{{ route('tag', $tag->tag_slug) }}">{{ $tag->name }}</a>
            @endforeach
        </div>
    @endforeach
@endsection
