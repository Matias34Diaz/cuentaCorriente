@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta pagina podras editar un curso vista</h1>




    <form action=" {{ route('cursos.update', $curso) }}" method="post">
        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>

        <br>
        <label>
            Descriptions:
            <br>
            <textarea name="descriptions" rows="5">{{ $curso->descriptions }}</textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value=" {{ $curso->categoria }}">
        </label>
        <br>

        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
