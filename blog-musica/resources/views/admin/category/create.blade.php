@extends('layouts.master')

@section('title', 'Category')

<title>Añadir Musica</title>

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Añadir Musica </h4>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>

                @endif

                <form action= "{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="">Artista</label>
                        <input type="text" name="artist" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Titulo cancion</label>
                        <input type="text" name="title_song" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Titulo album</label>
                        <input type="text" name="title_album" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Año</label>
                        <input type="text" name="year" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Genero</label>
                        <input type="text" name="genre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Duracion</label>
                        <input type="text" name="duration" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Imagen de album</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Cancion</label>
                        <input type="file" name="song" class="form-control" accept="mp3">
                    </div>
                    <div class="mb-3">
                        <label for="">Imagen de artista</label>
                        <input type="file" name="image_artist" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Imagen concierto</label>
                        <input type="file" name="image_concert" class="form-control">
                    </div>

                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Navbar Status</label>
                            <input type="checkbox" name="navbar_status" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status" />
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>




            </div>
            </form>
        </div>
    </div>


@endsection
