@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>


    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}

        <div class="form-row">
            <div class="col-4">
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col">
                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            </div>

        </div>

    {!! Form::close() !!}

@endsection

