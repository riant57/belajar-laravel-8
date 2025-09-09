@extends('layouts.main')
@section('container')
    <h1>Post Category</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <a href="/blog/categories/{{ $category->slug }}">{{ $category->name }}</a> 
            </li>
        </ul>
    @endforeach
@endsection