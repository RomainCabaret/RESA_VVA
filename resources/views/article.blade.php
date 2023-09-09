@extends('layouts.app')


@section('content')
    <h1>{{ $post->content }}</h1>
    {{-- <span>{{ $post->image ? $post->image->path : "Pas d'image" }}</span> --}}
    <hr>
    <ol>
        @forelse ($post->comments as $comment)
            <li>{{ $comment->content }} | crée en {{ $comment->created_at->format('d-m-Y') }}</li>
        @empty
            <p>Aucun commentaire</p>
        @endforelse
    </ol>
    <hr>
    @forelse ($post->tags as $tag)
        <span>{{ $tag->name }}</span>
    @empty
        <span>Aucun tag pour ce post</span>
    @endforelse

    <hr>

    {{-- <span> Nom de l'article de l'image : {{ $post->imageArtist ? $post->imageArtist->name : "Pas d'artist" }}</span> --}}
@endsection
