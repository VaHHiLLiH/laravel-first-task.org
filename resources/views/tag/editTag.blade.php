@extends('layouts.mainFrame')
@section('title', 'Update Tag')
@section('content')
    <form method="post" action="{{ route('tags.update', $tag->id) }}">
        @method('PATCH')
        @csrf
        <label for="article-name">Name</label>
        <input id="article-name" name="tag_name" value="{{ $tag->name }}">
        <br/>
        <button type="submit">Update Tag</button>
    </form>
@endsection
