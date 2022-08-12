@extends('layouts.mainFrame')
@section('title', 'Add Category')
@section('content')
    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <label for="category-name">Name</label>
        <input id="category-name" name="name">
        <br/>
        <label for="category-description">Description</label>
        <input id="category-description" name="description">
        <br/>
        <label for="category-articles">Articles</label>
        <select name="category-articles[]" multiple required>
            <option disabled>Choose articles</option>
            @foreach($articles as $article)
                <option value="{{ $article->id }}">{{ $article->name }}</option>
            @endforeach
        </select>
        <button type="submit">Add category</button>
    </form>
@endsection
