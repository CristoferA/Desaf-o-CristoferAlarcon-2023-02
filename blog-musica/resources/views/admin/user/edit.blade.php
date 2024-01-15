@extends('layouts.master')

@section('title', 'Edit Users')

<title>Editar Usuarios</title>

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4>Editar Usuarios
                    <a href="{{ url('admin/users') }}" class="btn btn-danger float-end">Atras</a>
                </h4>
            </div>
            <div class="card-body">

                <form action="">

                    <div class="mb-3">
                        <label>Nombre de Usuario</label>
                        <p class="form-control">{{ $user->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <p class="form-control">{{ $user->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Creado en</label>
                        <p class="form-control">{{ $user->created_at->format('d/m/Y') }}</p>
                    </div>

                </form>

                <form action="{{ url('admin/update-user/' . $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Rol como</label>
                        <select name="role_as" class="form-control">
                            <option value="1" {{ $user->role_as == '1' ? 'selected' : '' }}>Administrador</option>
                            <option value="0" {{ $user->role_as == '0' ? 'selected' : '' }}>Visitante</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Editar rol Usuario</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
