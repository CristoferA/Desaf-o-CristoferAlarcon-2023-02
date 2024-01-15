@extends('layouts.master')

@section('title', 'Panel del blog')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Panel de control</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Panel de control</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Administrador</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Detalles</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>

                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Notas</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Detalles</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>

                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Notas</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Detalles</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
