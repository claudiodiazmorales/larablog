@extends('dashboard.layout')

@section('content')

        <a href="{{ route("category.create") }}">Crear Categoria</a>

        <table>
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
                                        <a href="{{ route("category.edit", $item->id) }}">Editar</a>
                                        <a href="{{ route("category.show", $item->id) }}">Ver</a>
                                        <form action="{{ route("category.destroy", $item->id) }}" method="post">
                                                @method("DELETE")
                                                @csrf
                                                <button type="submit">Eliminar</button>
                                        </form>
                                </td>
                                
                        </tr>
                @endforeach
                </tbody>
        </table>
        {{ $categories->links() }}
    
@endsection
