<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }

    public function create()
    {
        return view('autores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_real' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        Autor::create($request->only('nombre_real', 'email'));

        return redirect()->route('autores.index')
            ->with('success', 'Autor guardado correctamente');
    }

    // 🔹 FORMULARIO EDITAR
    public function edit(Autor $autore)
    {
        return view('autores.edit', compact('autore'));
    }

    // 🔹 ACTUALIZAR
    public function update(Request $request, Autor $autore)
    {
        $request->validate([
            'nombre_real' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $autore->update($request->only('nombre_real', 'email'));

        return redirect()->route('autores.index')
            ->with('success', 'Autor actualizado correctamente');
    }

    // 🔹 ELIMINAR
    public function destroy(Autor $autore)
    {
        $autore->delete();

        return redirect()->route('autores.index')
            ->with('success', 'Autor eliminado correctamente');
    }
}
