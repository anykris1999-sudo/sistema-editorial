@extends('layout.app')

@section('content')
<h2>Editar Editorial</h2>

<form action="{{ route('editoriales.update', $editorial->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $editorial->nombre }}" required>
    </div>

    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('editoriales.index') }}" class="btn">Volver</a>
</form>
@endsection