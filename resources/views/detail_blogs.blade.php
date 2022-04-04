@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-5">{{$blogs["title"]}}</h2>
        <p>By. <a href="">{{$blogs->user->name}}</a> in <a href="/categories/{{ $blogs->category->slug }}">{{ $blogs->category->name }}</a></p>
        <!-- <p>{{$blogs["body"]}}</p> -->
        {!! $blogs->body !!}
        <a href="/blogs" class="d-block mt-3">Back to blogs</a>
    </article>
@endsection