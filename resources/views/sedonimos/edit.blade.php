@extends('layout.app')

@section('content')
<h2>Editar Seudónimo</h2>

<form action="{{ route('seudonimos.update', $seudonimo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Autor</label>
        <select name="autor_id" required>
            @foreach($autores as $autor)
                <option value="{{ $autor->id }}"
                    {{ $seudonimo->autor_id == $autor->id ? 'selected' : '' }}>
                    {{ $autor->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Nombre de Pluma</label>
        <input type="text" name="nombre_pluma" value="{{ $seudonimo->nombre_pluma }}" required>
    </div>

    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('seudonimos.index') }}" class="btn">Volver</a>
</form>
@endsection