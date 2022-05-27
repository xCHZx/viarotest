@extends('adminlte::page')

@section('title', 'Grados')

@section('content_header')
</br>
@stop

@section('content')

<h1> TECHNICAL TEST DE VIARO NETWORKS - CRUD</h1>
    

@stop

@section('css')
    
@stop

@section('js')

    @if (session("action") == "ok")
        <script>
            Swal.fire(
                '¡Realizado!',
                'La acción se ha realizado con éxito',
                'success'
            )
        </script>
    @elseif (session("error") == "ok")
        <script>
            Swal.fire(
                '¡Error!',
                'Hubo un error con la operación, por favor verificar los campos o intenta más tarde',
                'warning'
            )
        </script>
    @endif


<script type="text/javascript" src="\js\students-grades.js"></script>

@stop