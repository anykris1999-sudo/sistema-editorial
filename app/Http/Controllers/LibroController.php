<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::with('editorial')->get();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        $editoriales = Editorial::all();
        return view('libros.create', compact('editoriales'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'isbn' => 'required|string|max:100',
            'paginas' => 'required|integer',
            'editorial_id' => 'required|exists:editorials,id',
        ]);

        Libro::create($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro guardado correctamente');
    }
}
