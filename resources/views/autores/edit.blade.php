@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4">
            <h2 class="mb-4 text-center">Editar Autor</h2>

            <form action="{{ route('autores.update', $autore->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nombre real</label>
                    <input type="text"
                           name="nombre_real"
                           class="form-control"
                           value="{{ $autore->nombre_real }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ $autore->email }}"
                           required>
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary">
                        Actualizar Autor
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
