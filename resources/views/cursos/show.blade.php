@extends('layouts.plantilla')

@section('title', 'Curso' . $curso->name)

@section('content')
    <h1>Bienvenido al curso de {{ $curso->name }} view</h1>

    <a href="{{ route('cursos.index') }}">Volver a Cursos</a>

    <br>

    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>

    <p><strong>Categoria:</strong>{{ $curso->categoria }}</p>

    <p>{{ $curso->descriptions }}</p>
@endsection
