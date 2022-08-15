@extends('layouts.mainFrame')
@section('title', 'Update Category')
@section('content')
    <form method="post" action="{{ route('categories.update', $category->id) }}">
        @method('PATCH')
        @csrf
        <label for="article-name">Name</label>
        <input id="article-name" name="category_name" value="{{ $category->name }}">
        <br/>
        <label for="article-description">Description</label>
        <input id="article-description" name="category_description" value="{{ $category->description }}">
        <br/>
        <select name="category-articles[]" multiple required>
            <option disabled>Choose articles</option>
            @foreach($articles as $article)
                @if($articlesForThatCategory->has($article->id))
                    <option selected value="{{ $article->id }}">{{ $article->name }}</option>
                @else
                    <option value="{{ $article->id }}">{{ $article->name }}</option>
                @endif
            @endforeach
        </select>
        <button type="submit">Update Category</button>
    </form>
@endsection
