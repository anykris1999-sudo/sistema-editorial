<?php

namespace App\Http\Controllers;

use App\Models\Seudonimo;
use App\Models\Autor;
use Illuminate\Http\Request;

class SeudonimoController extends Controller
{
    public function index()
    {
        $seudonimos = Seudonimo::with('autor')->get();
        return view('seudonimos.index', compact('seudonimos'));
    }

    public function create()
    {
        $autores = Autor::all();
        return view('seudonimos.create', compact('autores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'autor_id' => 'required',
            'nombre_pluma' => 'required',
            'fecha_registro' => 'required'
        ]);

        Seudonimo::create($request->all());

        return redirect()->route('seudonimos.index');
    }

    public function edit(Seudonimo $seudonimo)
    {
        $autores = Autor::all();
        return view('seudonimos.edit', compact('seudonimo', 'autores'));
    }

    public function update(Request $request, Seudonimo $seudonimo)
    {
        $request->validate([
            'autor_id' => 'required',
            'nombre_pluma' => 'required',
            'fecha_registro' => 'required'
        ]);

        $seudonimo->update($request->all());

        return redirect()->route('seudonimos.index');
    }

    public function destroy(Seudonimo $seudonimo)
    {
        $seudonimo->delete();
        return redirect()->route('seudonimos.index');
    }
}