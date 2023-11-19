@extends('layouts.main')

@section('contain')

<article>
    <h3> {{$post["title"]}}</h3>
    <h5>{{$post["author"]}}</h5>
    <p>{{$post["body"]}}</p>

<a href="/posts">back to post</a>
</article>

@endsection
