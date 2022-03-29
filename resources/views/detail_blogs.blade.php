@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-5">{{$blogs["title"]}}</h2>
        <!-- <p>{{$blogs["body"]}}</p> -->
        {!! $blogs->body !!}
    </article>
@endsection