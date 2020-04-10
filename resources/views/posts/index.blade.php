@extends('posts.master')

@section('contenido')
    <div class="card-header">Listado</div>

    <div class="card-body">
        <a href="{{ route('posts.create')}}">Agregar</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->autor}}</td>
                        <td>{{$post->nombre}}</td>
                        <td>{{$post->descripcion}}</td>
                        <td><a href="{{ route('posts.edit',$post->id)}}">Editar</a></td>
                        <td>
                            <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection