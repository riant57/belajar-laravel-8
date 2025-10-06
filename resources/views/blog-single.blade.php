@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-5">
                <h2>{{$post->title}}</h2>
                <p>By <a class="text-decoration-none" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a class="text-decoration-none" href="categories/{{$post->category->slug}}">{{$post->category->name}}</p></a>
                <img src="https://picsum.photos/1200/400?programming" class="img-fluid" alt="...">
                <article class="my-3">
                    {!!$post->body!!}
                </article>
                <a href="/blog" class="d-block mt-2">Back</a>
            </div>
        </div>
    </div>
@endsection