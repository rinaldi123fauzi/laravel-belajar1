@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-5">{{$blogs["title"]}}</h2>
        <p>By. Rinaldi in <a href="/categories/{{ $blogs->category->slug }}">{{ $blogs->category->name }}</a></p>
        <!-- <p>{{$blogs["body"]}}</p> -->
        {!! $blogs->body !!}
    </article>
@endsection