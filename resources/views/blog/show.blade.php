@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>Post</h2>
                </div>
                <div class="card-body">
                    <h5>{{$blog->title}}</h5>
                    <p>{{$blog->post}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection