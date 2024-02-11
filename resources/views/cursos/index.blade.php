@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>bienvvenido a la pagina Cursos vista</h1>
    <a href="{{ route('cursos.create') }}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }}</a>
            </li>
        @endforeach
    </ul>
    {{ $cursos->links() }}
@endsection
