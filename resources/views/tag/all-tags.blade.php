@extends('layouts.edit-models')
@section('title', 'Tags page')
@section('special-route')
    {{ route('tags.create') }}
@endsection
@section('special-text', 'Add new Tag')
@section('content')
    @foreach($tags as $tag)
        <div class="tag-item">
            <form action="{{ route('tags.destroy',$tag->id) }}" method="post">
                @csrf
                @method('DELETE')
                <p>{{ $tag->name }}</p>
                <div class="buttons">
                    <a href="{{ route('tags.edit', $tag->id) }}">Edit tag</a>
                    <button type="submit">Delete tag</button>
                </div>
            </form>
        </div>
    @endforeach
@endsection
