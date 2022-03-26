@extends('dashboard.layout')

@section('content')
        <h1>{{$post->title}}</h1>
        <p>{{$post->posted}}</p>
        <p>{{$post->description}}</p>
        <div>{{$post->content}}</div>
        <img src="{{ asset('image/'.$post->image) }}" alt="hola" width="500">
@endsection