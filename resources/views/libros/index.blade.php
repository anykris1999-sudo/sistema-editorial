@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">📚 Libros</h2>

    <a href="{{ route('libros.create') }}" class="btn btn-primary mb-3">
        + Nuevo Libro
    </a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>ISBN</th>
                <th>Páginas</th>
                <th>Editorial</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->isbn }}</td>
                    <td>{{ $libro->paginas }}</td>
                    <td>{{ $libro->editorial->nombre ?? 'Sin editorial' }}</td>
                    <td>
                        <a href="{{ route('libros.edit', $libro) }}" class="btn btn-sm btn-warning">
                            Editar
                        </a>
                        <form action="{{ route('libros.destroy', $libro) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        No hay libros registrados
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
