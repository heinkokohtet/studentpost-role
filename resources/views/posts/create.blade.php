@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Create Student post
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Create</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => 'posts.store', 'method'=>'POST')) !!}
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Date of Birth:</strong>
                        {!! Form::date('dob', null, array('placeholder' => 'Date of Birth','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                     <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection