@extends('layouts.edit-models')
@section('title', 'Category page')
@section('special-route')
    {{ route('categories.create') }}
@endsection
@section('special-text', 'Add new Category')
@section('content')
    @foreach($categories as $category)
        <div class="category-item">
            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                @csrf
                @method('DELETE')
                <p>Category Name</p>
                <p>{{ $category->name }}</p>
                <br/>
                <p>Category Description</p>
                <p>{{ $category->description }}</p>
                <div class="buttons">
                    <a href="{{ route('categories.edit', $category->id) }}">Edit category</a>
                    <button type="submit">Delete category</button>
                </div>
            </form>
        </div>
    @endforeach
@endsection
