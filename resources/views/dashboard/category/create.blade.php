@extends('dashboard.layout')

@section('content')
    <h1>Crear Category</h1>
        
        @include('dashboard.fragment._errors-form')

        <form action="{{ route('category.store') }}" method="post">
                @include('dashboard.category._form')
        </form>
@endsection