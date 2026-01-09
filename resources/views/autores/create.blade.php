@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4 shadow">
            <h2 class="mb-4 text-center">Nuevo Autor</h2>

            <form action="{{ route('autores.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre real del autor</label>
                    <input
                        type="text"
                        name="nombre_real"
                        class="form-control"
                        placeholder="Ej: Ana Lozano"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="autor@email.com"
                        required
                    >
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Guardar Autor
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
