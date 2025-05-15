@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div>
    <form action="{{route('guardar.paciente')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$paciente->id}}">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="{{$paciente->nombre}}" required><br>
        <label for="ApPat">Apellido Paterno:</label><br>
        <input type="text" id="ApPat" name="ApPat" value="{{$paciente->ApPat}}" required><br>
        <label for="ApMat">Apellido Materno:</label><br>
        <input type="text" id="ApMat" name="ApMat" value="{{$paciente->ApMat}}" required><br>
        <label for="tele">Número de teléfono:</label><br>
        <input type="number" id="tele" name="tele" value="{{$paciente->tele}}" required><br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@stop

@section('css')
    <style>
        body {
            background-color: #f8fafc;
        }
        h1 {
            color: #636b6f;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
