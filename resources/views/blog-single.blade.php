@extends('layouts.main')
@section('container')
    <article>
        <h2>{{$post->title}}</h2>
        <p>By <a class="text-decoration-none" href="#">{{$post->user->name}}</a> in <a class="text-decoration-none" href="categories/{{$post->category->slug}}">{{$post->category->name}}</p></a>
        {!!$post->body!!}
    </article>
    <a href="/blog" class="d-block mt-2">Back</a>
@endsection