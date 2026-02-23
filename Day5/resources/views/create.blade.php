@extends('layouts.main')

@section('content')
    <div class="mx-2" id="layoutSidenav_content">
        <h1>New post</h1>

        <form action="{{ route('article.store') }}" method="POST">
            @csrf

            <label for="category">Category</label>
            <select class="form-control" name="category_id">
                <option value="" disabled></option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->libelle }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />

            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title" required>
            <x-input-error :messages="$errors->get('title')" class="mt-2" />

            <label for="content">Content:</label>
            <textarea class="form-control" name="content" id="content" rows="8" required></textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />

            <button class="btn btn-primary" type="submit">Create</button>
        </form>

        <br>
        <a href="{{ route('article.index') }}"><- Back</a>
    </div>
@endsection
