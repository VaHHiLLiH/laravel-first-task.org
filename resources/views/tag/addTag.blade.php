@extends('layouts.mainFrame')
@section('title', 'Add Tag')
@section('content')
    <form method="post" action="{{ route('tags.store') }}">
        @csrf
        <label for="tag-name">Name</label>
        <input id="tag-name" name="name">
        <br/>
        <label for="tag-slug">Slug</label>
        <input id="tag-slug" name="tag_slug">
        <br/>
        <button type="submit">Add tag</button>
    </form>
@endsection
