@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}

    <div style="width: 50%;">
        <div style="display: flex;">
            {!! Form::text('title', null , ['class'=>'form-control']) !!}
            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
        </div>
        <br>
        <div class="custom-file">
            {!! Form::file('file', ['class'=>'custom-file-input']) !!}
            {!! Form::label('file', 'Choose a file', ['class'=>'custom-file-label']) !!}
        </div>
    </div>

    {!! Form::close() !!}


        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

@endsection

