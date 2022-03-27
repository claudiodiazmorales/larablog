@extends('dashboard.layout')

@section('content')

        <a class='btn btn-success' href="{{ route("post.create") }}">Crear</a>

        <table class="table">
                <thead>
                <tr> 
                        <th>Titulo</th>
                        <th>Categoria</th>
                        <th>Posted</th>
                        <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $item)
                        <tr> 
                                
                                <td>{{$item->title}}</td>
                                <td>{{ $item->category->title }}</td>
                                <td>{{$item->posted}}</td>
                                <td>
                                        <a class='btn btn-primary' href="{{ route("post.edit", $item->id) }}">Editar</a>
                                        <a class='btn btn-primary' href="{{ route("post.show", $item->id) }}">Ver</a>
                                        <form action="{{ route("post.destroy", $item->id) }}" method="post">
                                                @method("DELETE")
                                                @csrf
                                                <button class='btn btn-danger' type="submit">Eliminar</button>
                                        </form>
                                </td>
                                
                        </tr>
                @endforeach
                </tbody>
        </table>
        {{ $posts->links() }}
    
@endsection
