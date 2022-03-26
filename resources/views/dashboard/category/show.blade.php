@extends('dashboard.layout')

@section('content')
        <h1>{{$category->title}}</h1>
        <p>{{$category->description}}</p>
        <div>{{$category->slug}}</div>
@endsection