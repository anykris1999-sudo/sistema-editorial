@extends('layout.app')

@section('content')
<h2>Editar Libro</h2>

<form action="{{ route('libros.update', $libro->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Título</label>
        <input type="text" name="titulo" value="{{ $libro->titulo }}" required>
    </div>

    <div>
        <label>Editorial</label>
        <select name="editorial_id" required>
            @foreach($editoriales as $editorial)
                <option value="{{ $editorial->id }}"
                    {{ $libro->editorial_id == $editorial->id ? 'selected' : '' }}>
                    {{ $editorial->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('libros.index') }}" class="btn">Volver</a>
</form>
@endsection