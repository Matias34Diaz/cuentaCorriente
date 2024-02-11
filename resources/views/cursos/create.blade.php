@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podras crear un curso vista</h1>




    <form action=" {{ route('cursos.store') }}" method="POST">
        @csrf

        <label>
            nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            descriptions:
            <br>
            <textarea name="descriptions" rows="5">
               
            </textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>

        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
