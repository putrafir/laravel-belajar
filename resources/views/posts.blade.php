@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $post->slug }}" class=" text-decoration-none">{{ $post->title }}</a>
    </h2>
    <p>By. Ahmad Putra Firdaus in <a href="/categories/{{ $post->category->slug }}" class=" text-decoration-none">{{ $post->category->name }}</a></p>

    <p>{{ $post->excerpt }}</p>
</article>
@endforeach

@endsection
