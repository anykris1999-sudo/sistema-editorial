@extends('layout.app')

@section('content')
<h2>Seudónimos</h2>

<a href="{{ route('seudonimos.create') }}" class="btn btn-success">Nuevo Seudónimo</a>

<table>
    <tr>
        <th>Autor</th>
        <th>Nombre de Pluma</th>
        <th>Fecha</th>
        <th>Acciones</th>
    </tr>

    @foreach($seudonimos as $seudonimo)
    <tr>
        <td>{{ $seudonimo->autor->nombre ?? 'Sin autor' }}</td>
        <td>{{ $seudonimo->nombre_pluma }}</td>
        <td>{{ $seudonimo->fecha_registro }}</td>
        <td>
            <a href="{{ route('seudonimos.edit', $seudonimo->id) }}" class="btn">Editar</a>

            <form action="{{ route('seudonimos.destroy', $seudonimo->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection