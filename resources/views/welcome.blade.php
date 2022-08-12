@extends('layouts.mainFrame')
@section('title', 'User-Panel')
@section('content')
    @foreach($categories as $category)
        <div class="category">
            <a href="{{ route('category', $category->category_slug) }}">
            <h3>{{ $category->name }}</h3>
            <p>{{ $category->description }}</p>
            </a>
        </div>
    @endforeach
@endsection
