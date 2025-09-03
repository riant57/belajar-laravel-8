@extends('layouts.main')
@section('container')
    <article>
        <h2>{{$post->title}}</h2>
        <p>By Rian tri in <a href="categories/{{$post->category->slug}}">{{$post->category->name}}</p></a>
        {!!$post->body!!}
    </article>
    <a href="/blog">Back</a>
@endsection