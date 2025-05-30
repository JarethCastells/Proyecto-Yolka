@extends('adminlte::page')

@section('title', 'Lista de Especialidades')

@section('content_header')
    <h1>Lista de Consultorios</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">Pacientes</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>ApPat</th>
                                    <th>ApMat</th>
                                    <th>Telefono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pacientes as $paciente)
                                    <tr>
                                        <td>{{ $paciente->id }}</td>
                                        <td>{{ $paciente->nombre }}</td>
                                        <td>{{ $paciente->ApPat }}</td>
                                        <td>{{ $paciente->ApMat }}</td>
                                        <td>{{ $paciente->tele }}</td>
                                        <td>
                                            <a href="{{ route('nueva.paciente', ['id' => $paciente->id]) }}" class="btn btn-primary">Editar</a>
                                            <form action="{{ route('borrar.paciente') }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $paciente->id }}">
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta especialidad?');">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop