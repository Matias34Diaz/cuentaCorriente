<?php

namespace App\Http\Controllers;

use App\Models\CondicionFiscal;
use Illuminate\Http\Request;

class CondicionFiscalController extends Controller
{
    public function index()
    {
        $condicionesFiscales = CondicionFiscal::paginate();

        return view('condicion-fiscal.index', compact('condicionesFiscales'))
            ->with('i', (request()->input('page', 1) - 1) * $condicionesFiscales->perPage());
    }

    public function create()
    {
        $condicionFiscal = new CondicionFiscal();
        return view('condicion-fiscal.create', compact('condicionFiscal'));
    }

    public function store(Request $request)
    {
        request()->validate(CondicionFiscal::$rules);

        $condicionFiscal = CondicionFiscal::create($request->all());

        return redirect()->route('condicion-fiscal.index')
            ->with('success', 'CondicionFiscal created successfully.');
    }

    public function show($id)
    {
        $condicionFiscal = CondicionFiscal::find($id);

        return view('condicion-fiscal.show', compact('condicionFiscal'));
    }

    public function edit($id)
    {
        $condicionFiscal = CondicionFiscal::find($id);

        return view('condicion-fiscal.edit', compact('condicionFiscal'));
    }

    public function update(Request $request, CondicionFiscal $condicionFiscal)
    {
        request()->validate(CondicionFiscal::$rules);

        $condicionFiscal->update($request->all());

        return redirect()->route('condicion-fiscal.index')
            ->with('success', 'CondicionFiscal updated successfully');
    }

    public function destroy($id)
    {
        $condicionFiscal = CondicionFiscal::find($id)->delete();

        return redirect()->route('condicion-fiscal.index')
            ->with('success', 'CondicionFiscal deleted successfully');
    }
}
