@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
    <div>
    <form action="{{route('guardar.consultorio')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$consultorio->id}}">
        <label for="nombre">Numero:</label><br>
        <input type="number" id="nombre" name="nombre" value="{{$consultorio->numero}}" required><br>
        <dr></dr>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
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
