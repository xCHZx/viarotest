@extends('adminlte::page')

@section('title', 'Alumnos')

@section('content_header')
</br>
@stop

@section('content')

<div class="card card-custom-shadow">
    <div class="card-header">
        <div class="d-flex">
            <div class="p-2" >
                <h1>Alumnos</h1>
            </div>
        <div class="ml-auto p-2" style="margin-right:10px;">
            <button type="button" class="btn btn-success btn-lg btn-block addBtn" data-toggle="modal" data-target="#modalCreate" id="addBtn">
                <span class="fas fa-plus-circle" aria-hidden="true"></span>
            Crear nuevo Alumno</button>
        </div>
    </div>
    </div>
    <div class="card-body">

        <!-- Tabla para mostrar-->
        <div>
            <table class="table table-hover table-bordered dt"  id="students" class="display">
                <thead class=thead-light>
                    <tr>
                        <th>#</th>
                        <th>Nombre(s)</th>
                        <th>Apellido(s)</th>
                        <th>Género</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Acciones</th>
                    </tr>      
                </thead>
            </table>
        </div>
        <!-- FIN Tabla para mostrar-->
    </div>
</div>
    
    @include('students.students-modals')

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


<script type="text/javascript" src="\js\students.js"></script>

@stop