@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class=" mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><i class=" bi bi-arrow-left"></i>Back to my post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i
                        class="bi bi-pencil"></i>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class=" d-inline">
                    @method('delete')
                    @csrf
                    <button class=" btn bg-danger" onclick="return confirm('Are you sure?')"><i
                            class="bi-x-circle"></i>Delete </button>
                </form>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class=" img-fluid mt-3">
                <article class=" my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
