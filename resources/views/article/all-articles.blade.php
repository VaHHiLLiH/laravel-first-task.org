@extends('layouts.edit-models')
@section('title', 'Article page')
@section('special-route')
    {{ route('articles.create') }}
@endsection
@section('special-text', 'Add new Article')
@section('content')
    @foreach($articles as $article)
        <div class="article-item">
            <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                @csrf
                @method('DELETE')
                <p>Article Id</p>
                <p>{{ $article->id }}</p>
                <p>Article Name</p>
                <p>{{ $article->name }}</p>
                <p>Article Description</p>
                <p>{{ $article->description }}</p>
                <p>Article Short Description</p>
                <p>{{ $article->short_description }}</p>
                <div class="buttons">
                    <a href="{{ route('articles.edit', $article->id) }}">Edit article</a>
                    <button type="submit">Delete article</button>
                </div>
            </form>
        </div>
        <br/>
    @endforeach
@endsection
