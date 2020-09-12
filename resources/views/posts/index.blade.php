@extends('layouts.app')

@section('content')




   <ul>
       @foreach($posts as $post)

           <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
           <img src="{{$post->path}}" alt="" class="image-container" width="400px">

       @endforeach
   </ul>





@endsection