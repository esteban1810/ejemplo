@extends('posts.master')

@section('contenido')
    <div class="card-header">Crear nuevo</div>

    <div class="card-body">
        <form action="{{route('posts.store')}}" method="post">
            <div>
                <label for="Autor">Autor:</label><br>
                <input type="text" name="autor" id="autor">
            </div>
            <div>
                <label for="titulo">Titulo:</label><br>
                <input type="text" name="titulo" id="titulo">
            </div>
            <div>
                <label for="descripcion">Descripción:</label><br>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
            </div>
            {{ csrf_field() }}
            <input type="submit" value="Aceptar">
        </form>
    </div>
@endsection