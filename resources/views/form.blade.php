@extends('layouts.app')


@section('content')
    <h2>Créer un nouveau post</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif

    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="titre">
        <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="avatar">Choose a profile picture:</label>

        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />
        <br>
        <button type="submit">Créer</button>

    </form>
@endsection
