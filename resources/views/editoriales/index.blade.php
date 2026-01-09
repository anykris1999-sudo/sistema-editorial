@extends('layout.app')

@section('content')
<h2>Editoriales</h2>

<a href="{{ route('editoriales.create') }}" class="btn btn-success">Nueva Editorial</a>

<table>
<tr>
    <th>Nombre</th>
    <th>Acciones</th>
</tr>

@foreach($editoriales as $editorial)
<tr>
    <td>{{ $editorial->nombre }}</td>
    <td>
        <a href="{{ route('editoriales.edit', $editorial->id) }}" class="btn">Editar</a>
        <form action="{{ route('editoriales.destroy', $editorial->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection