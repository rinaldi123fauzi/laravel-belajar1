@extends('layouts.main')

@section('container')
    <article>
        <h2>{{$blogs["title"]}}</h2>
        <h5>{{$blogs["author"]}}</h5>
        <p>{{$blogs["body"]}}</p>
    </article>
@endsection