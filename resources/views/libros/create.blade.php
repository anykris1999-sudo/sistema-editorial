@extends('layout.app')

@section('content')
<h2>Nuevo Libro</h2>

<form action="{{ route('libros.store') }}" method="POST">
    @csrf

    <div>
        <label>Título</label>
        <input type="text" name="titulo" required>
    </div>

    <div>
        <label>Editorial</label>
        <select name="editorial_id" required>
            @foreach($editoriales as $editorial)
                <option value="{{ $editorial->id }}">{{ $editorial->nombre }}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-success">Guardar</button>
    <a href="{{ route('libros.index') }}" class="btn">Volver</a>
</form>
@endsection