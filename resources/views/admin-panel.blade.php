@extends('layouts.mainFrame')
@section('title', 'Admin-Panel')
@section('content')
    <div class="post-header">
        <div id="articles">
            <a href="{{ route('articles.index') }}">Взаимодействие со статьями</a>
        </div>
        <div id="categories">
            <a href="{{ route('categories.index') }}">Взаимодействие с категориями</a>
        </div>
        <div id="tags">
            <a href="{{ route('tags.index') }}">Взаимодействие с тегами</a>
        </div>
    </div>
@endsection
