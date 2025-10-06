@extends('layouts.main')
@section('container')
    <h1>Hello, Halaman Post</h1>
    <h5 class="mb-3"><a class="text-decoration-none " href="/blog/categories">Halaman Category</a></h5>
    {{-- @dd($posts) --}}
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://picsum.photos/1200/400?{{$posts[0]->category->name}}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title"><a class="text-decoration-none text-dark" href="/blog/{{ $posts[0]->slug }}">{{$posts[0]->title}}</a> </h5>
                <p>
                    <small>By <a class="text-decoration-none" href="/authors/{{$posts[0]->author->username}}">{{$posts[0]->author->name}}</a> in <a class="text-decoration-none" href="/blog/categories/{{$posts[0]->category->slug}}">{{$posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans()}}</small>
                </p>
                <p class="card-text">{{$posts[0]->excerpt}}</p>
                <a class="text-decoration-none btn-primary p-1" href="/blog/{{ $posts[0]->slug }}">Read More</a> 
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
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