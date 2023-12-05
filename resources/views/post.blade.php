@extends('layouts.main')

@section('contain')

<article>
    <h1 class="mb-5"> {{$post->title}}</h1>

    <p>{!!$post->body!!}</p>

<a href="/posts">back to post</a>
</article>

@endsection
