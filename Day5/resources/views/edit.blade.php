@extends('layouts.main')
@section('content')
    <div class="mx-2" id="layoutSidenav_content">

        <h1>Edit post</h1>

        <form action="{{ route('article.update', $article) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="category">Category</label>
            <select class="form-control" name="category_id">
                <option value="{{ $article->category->id }}">{{ $article->category->libelle  }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $article->title }}" required>

            <label for="content">Content:</label>
            <textarea class="form-control" name="content" id="content" rows="8" required>{{ $article->content }}</textarea>

            <button class="btn btn-primary" type="submit">Edit</button>
        </form>

        <br>
        <a href="{{ route('article.index') }}"><- Back</a>
    </div>
@endsection
