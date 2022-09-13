@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Posts</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($blogs as $blog)
                        <li class="list-group-item">
                            <div class="posts-list">
                                <div class="content">
                                    <h2>{{$blog->title}}</h2>
                                </div>
                                <div class="buttons">
                                    <a href="{{route('show', $blog)}}" class="btn btn-info">Show</a>
                                    <a href="{{route('edit', $blog)}}" type="button" class="btn btn-success">Edit</a>
                                    <form action="{{route('delete', $blog)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No Posts found</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection