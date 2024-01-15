@extends('layouts.master')

@section('title', 'Category')

<title>Ver Musica</title>

@section('content')

    <div class="container-fluid px-4">

        <div class="card mt-4">
            <div class="card-header">
                <h4>Ver Musica <a href="{{ url('admin/add-category') }}" class="btn btn-primary btn-sm float-end">Añadir
                        Musica</a></h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table id="myDataTable" class="table table-bordered table compact" style="width:100%    " >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Artista</th>
                            <th>Titulo cancion</th>
                            <th>Titulo album</th>
                            <th>Año</th>
                            <th>Genero</th>
                            <th>Imagen album</th>
                            <th>Cancion</th>
                            <th>Imagen artista</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->artist }}</td>
                                <td>{{ $item->title_song }}</td>
                                <td>{{ $item->title_album }}</td>
                                <td>{{ $item->year }}</td>
                                <td>{{ $item->genre }}</td>
                                <td>
                                    <img src="{{ asset('uploads/category/images/' . $item->image) }}" width="80px"
                                        height="80px" alt="img">
                                </td>
                                <td>
                                    <audio controls>
                                        <source src="{{ asset('uploads/category/songs/' . $item->song) }}"
                                            type="audio/mpeg">
                                    </audio>
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/category/images/' . $item->image_artist) }}" width="80px"
                                        height="80px" alt="imga">
                                </td>
                                <td>
                                    <a href="{{ url('admin/edit-category/' . $item->id) }}"
                                        class="btn btn-success">Editar</a>
                                    <a href="{{ url('admin/delete-category/' . $item->id) }}"
                                        class="btn btn-danger">Eliminar</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    </div>

@endsection
