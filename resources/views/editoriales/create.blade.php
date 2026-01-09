@extends('layout.app')

@section('content')
<h2>Nueva Editorial</h2>

<form action="{{ route('editoriales.store') }}" method="POST">
    @csrf

    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" required>
    </div>

    <button class="btn btn-success">Guardar</button>
    <a href="{{ route('editoriales.index') }}" class="btn">Volver</a>
</form>
@endsection