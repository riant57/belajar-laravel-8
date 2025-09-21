@extends('layouts.main')
@section('container')
    <h1>Post Category : {{$category}}</h1>
    {{-- @dd($posts) --}}
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a> 
            </h2>
            <p>By <a class="text-decoration-none" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection