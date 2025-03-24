@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<h1>Item bewerken</h1>
<form action="{{ route ("items.update", $item->id) }}" method="POST">
    @csrf
    @method("PUT")

    <label	for="name">Naam:</label>
        <input type="text" id="name" name="name" value="{{ $item->name }}" required>
        <br>
    
    <label for="description">Beschrijving</label>
        <textarea id="description" name="description">{{ $item->description }}</textarea>
        <br>
        
    <label for="category">Categorie:</label>
        <select name="category_id" id="category" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

    <button type="submit">Bijwerken</button>
</form>




@endsection