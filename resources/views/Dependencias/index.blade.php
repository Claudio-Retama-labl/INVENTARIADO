@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dependencias</h1>
@stop

@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nueva Dependencia</button>



    <table id="dependenciasTable" style="width:100%" class="display table table-striped " style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estado </th>
                <th>Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dependencias as $dependencia)
                <tr>
                    <td>{{ $dependencia->id }}</td>
                    <td>{{ $dependencia->nombre }}</td>
                    <td>{{ $dependencia->descripcion }}</td>
                    <td>{{ $dependencia->estado }}</td>

                    <td><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                </tr>
            @endforeach

        </tbody>

    </table>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('dependencias-store') }}" method="POST">
                        @csrf
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" id="nombre">
                            </div>


                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Estado:</label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion">
                            </div>

                            <input type="submit" class="btn btn-info" name="Guardar"></input>

                    </form>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

        $(document).ready(function() {
            $('#dependenciasTable').DataTable();

        });
    </script>



@stop
