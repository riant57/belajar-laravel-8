@extends('layouts.main')
@section('container')
    <h1>Hello, Halaman Post</h1>
    {{-- @dd($posts) --}}
    @foreach ($posts as $post)
        <article class="mb-3 border-bottom pb-3">
            <h4>
                <a class="text-decoration-none" href="/blog/{{ $post->slug }}">{{ $post->title }}</a> 
            </h4>
            <p>By <a class="text-decoration-none" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a class="text-decoration-none" href="/blog/categories/{{$post->category->slug}}">{{$post->category->name}}</p></a>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/blog/{{ $post->slug }}">Read More</a> 
        </article>
    @endforeach
@endsection