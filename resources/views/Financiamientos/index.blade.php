@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Financiamientos</h1>
@stop

@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo Financiamiento</button>
  
    <table id="financiamientoTable" style="width:100%" class="display table table-striped " style="width:100%">
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
            @foreach ($financiamientos as $financiamiento)
                <tr>
                    <td>{{ $financiamiento->id }}</td>
                    <td>{{ $financiamiento->nombre }}</td>
                    <td>{{ $financiamiento->descripcion }}</td>
                    <td>{{ $financiamiento->estado }}</td>
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
                    <form action="{{ route('financiamientos-store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" id="recipient-name">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">descripcion:</label>
                            <input type="text" class="form-control" name="tipo" id="tipo">
                        </div>


                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">descripcion:</label>
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

    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script>
            console.log('Hi!');

            $(document).ready(function() {
                $('#financiamientoTable').DataTable();

            });
        </script>



    @stop
