@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My post</h1>

    </div>
    <div class="table-responsive col-lg-8 small">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td class=" d-flex gap-2 justify-content-center">
                            <a href="/dashboard/posts/{{ $post->slug }}"><i class="btn bi-eye btn-info"></i></span></a>
                            <a href="/dashboard/posts{{ $post->id }}"><i
                                    class="btn bi-pencil btn-warning"></i></span></a>
                            <a href="/dashboard/posts{{ $post->id }}"><i
                                    class="btn bi-x-circle btn-danger"></i></span></a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
