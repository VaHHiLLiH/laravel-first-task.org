@extends('layouts.mainFrame')
@section('title', 'Update Article')
@section('content')
    <form method="post" action="{{ route('articles.update', $article->id) }}">
        @method('PATCH')
        @csrf
        <label for="article-name">Name</label>
        <input id="article-name" name="article_name" value="{{ $article->name }}">
        <br/>
        <label for="article-description">Description</label>
        <input id="article-description" name="article_description" value="{{ $article->description }}">
        <br/>
        <label for="article-short-description">Short description</label>
        <input id="article-short-description" name="article_short_description" value="{{ $article->short_description }}">
        <br/>
        <label for="article-short-description">Slug</label>
        <input id="article_slug" name="article_slug" value="{{ $article->article_slug }}">
        <br/>
        <label for="article-tags">Tags</label>
        <select name="article-tags[]" multiple required>
            <option disabled>Choose tags</option>
            @foreach($tags as $tag)
                @if(in_array($tag->id, $tagsForThanArticle->pluck('id')->toArray()))
                    <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                @else
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endif
            @endforeach
        </select>

        <button type="submit">Update Article</button>
    </form>
@endsection
