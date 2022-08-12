@extends('layouts.mainFrame')
@section('title', 'Admin-Panel')
@section('content')
    <div class="articles">
        <a href="{{ route('articles.index') }}">Взаимодействие со статьями</a>
    </div>
    <div class="categories">
        <a href="{{ route('categories.index') }}">Взаимодействие с категориями</a>
    </div>
    <div class="tags">
        <a href="{{ route('tags.index') }}">Взаимодействие с тегами</a>
    </div>
@endsection
