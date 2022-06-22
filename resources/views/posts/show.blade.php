@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Student Post
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('posts.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    {{ $post->name }}
                </div>
                <div class="lead">
                    <strong>Date of Birth::</strong>
                    {{ $post->dob }}
                </div>
                <div class="lead">
                    <strong>Email:</strong>
                    {{ $post->email }}
                </div>
                <div class="lead">
                    <strong>Image:</strong>
                    <img src="{{ Storage::url($post->image) }}" height="75" width="75" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection