@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>

    <div style="display: flex;">

        {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}

        <div class="form-row">
            <div class="">
                {!! Form::text('title', $post->title , ['class'=>'form-control']) !!}
            </div>

            <div style="padding-left: 4px; padding-right: 4px;">
                {!! Form::submit('Update', ['class'=>'btn btn-info']) !!}
            </div>

        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}
        <div style="padding-left: 4px;">
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}

    </div>

@endsection