@extends('posts.master')

@section('contenido')
    <div class="card-header">Editar</div>

    <div class="card-body">
        <form action="{{route('posts.update',$post->id)}}" method="post">
            <div>
                <label for="Autor">Autor:</label><br>
            <input type="text" name="autor" id="autor" value="{{$post->autor ?? ''}}">
            </div>
            <div>
                <label for="titulo">Titulo:</label><br>
                <input type="text" name="titulo" id="titulo" value="{{$post->nombre ?? ''}}">
            </div>
            <div>
                <label for="descripcion">Descripción:</label><br>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10">{{$post->descripcion ?? ''}}</textarea>
            </div>
            @method('PUT')
            {{ csrf_field() }}
            <input type="submit" value="Aceptar">
        </form>
    </div>
@endsection