@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog</h1>
    @foreach ($blogs as $blog)
    <article class="mb-5 border-bottom pb-3">
        <h2>
            <a href="/blogs/{{$blog->slug}}" class="text-decoration-none">
                {{$blog->title}}
            </a>
        </h2>

        <p>By. <a href="">{{$blog->user->name}}</a> in <a href="/categories/{{ $blog->category->slug }}" class="text-decoration-none">{{ $blog->category->name }}</a></p>
        
        <p>{{$blog->excerpt}}</p>

        <a href="/blogs/{{$blog->slug}}" class="text-decoration-none">Read more ...</a>
    </article>
    @endforeach
@endsection
        