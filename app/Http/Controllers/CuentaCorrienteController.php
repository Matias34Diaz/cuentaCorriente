<?php

namespace App\Http\Controllers;

use App\Models\CuentaCorriente;
use Illuminate\Http\Request;

/**
 * Class CuentaCorrienteController
 * @package App\Http\Controllers
 */
class CuentaCorrienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentaCorrientes = CuentaCorriente::paginate();

        return view('cuenta-corriente.index', compact('cuentaCorrientes'))
            ->with('i', (request()->input('page', 1) - 1) * $cuentaCorrientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuentaCorriente = new CuentaCorriente();
        return view('cuenta-corriente.create', compact('cuentaCorriente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CuentaCorriente::$rules);

        $cuentaCorriente = CuentaCorriente::create($request->all());

        return redirect()->route('cuenta-corrientes.index')
            ->with('success', 'CuentaCorriente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuentaCorriente = CuentaCorriente::find($id);

        return view('cuenta-corriente.show', compact('cuentaCorriente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuentaCorriente = CuentaCorriente::find($id);

        return view('cuenta-corriente.edit', compact('cuentaCorriente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CuentaCorriente $cuentaCorriente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CuentaCorriente $cuentaCorriente)
    {
        request()->validate(CuentaCorriente::$rules);

        $cuentaCorriente->update($request->all());

        return redirect()->route('cuenta-corrientes.index')
            ->with('success', 'CuentaCorriente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cuentaCorriente = CuentaCorriente::find($id)->delete();

        return redirect()->route('cuenta-corrientes.index')
            ->with('success', 'CuentaCorriente deleted successfully');
    }
}
