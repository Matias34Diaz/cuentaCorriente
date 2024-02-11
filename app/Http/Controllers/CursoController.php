<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;
use ReturnTypeWillChange;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderby('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }


    public function store(request $request)
    {
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descriptions = $request->descriptions;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }


    public function show(Curso $curso)
    {

        return view('cursos.show', compact('curso'));
    }


    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }


    public function update(Request $request, Curso $curso)
    {

        $curso->name = $request->name;
        $curso->descriptions = $request->descriptions;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
