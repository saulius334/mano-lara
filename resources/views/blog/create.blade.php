@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>New Post</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('store')}}" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Title</span>
                        <input value="{{old('title')}}" type="text" name="title" class="form-control">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Post</span>
                        <textarea class="form-control" name="post">{{old('post')}}</textarea>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-secondary mt-4">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection