@extends('layout.app')

@section('content')
<h2>Nuevo Seudónimo</h2>

<form action="{{ route('seudonimos.store') }}" method="POST">
    @csrf

    <div>
        <label>Autor</label>
        <select name="autor_id" required>
            @foreach($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Nombre de Pluma</label>
        <input type="text" name="nombre_pluma" required>
    </div>

    <button class="btn btn-success">Guardar</button>
    <a href="{{ route('seudonimos.index') }}" class="btn">Volver</a>
</form>
@endsection