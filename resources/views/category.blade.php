@extends('layouts.main')
@section('container')
    <h1>Post Category : {{$category}}</h1>
    {{-- @dd($posts) --}}
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2" style="background-color:rgba(0,0,0,0.5)"><a class="text-decoration-none text-white" href="/blog/categories/{{$post->category->slug}}">{{$post->category->name}}</a></div>
                        <img src="https://picsum.photos/500/400?random" class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p>
                                <small>By <a class="text-decoration-none" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a>{{$post->created_at->diffForHumans()}}</small>
                            </p>
                            <p class="card-text">{{$post->excerpt}}</p>
                            <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>    
@endsection