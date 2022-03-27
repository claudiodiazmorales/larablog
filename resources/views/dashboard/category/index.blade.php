@extends('dashboard.layout')

@section('content')

        <a class='btn btn-success' href="{{ route("category.create") }}">Crear Categoria</a>

        <table class="table">
                <thead>
                <tr> 
                        <th>Titulo</th>
                        <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $item)
                        <tr> 
                                
                                <td>{{$item->title}}</td>
                                <td>
                                        <a class='btn btn-primary' href="{{ route("category.edit", $item->id) }}">Editar</a>
                                        <a class='btn btn-primary' href="{{ route("category.show", $item->id) }}">Ver</a>
                                        <form action="{{ route("category.destroy", $item->id) }}" method="post">
                                                @method("DELETE")
                                                @csrf
                                                <button class='btn btn-danger' type="submit">Eliminar</button>
                                        </form>
                                </td>
                                
                        </tr>
                @endforeach
                </tbody>
        </table>
        {{ $categories->links() }}
    
@endsection
