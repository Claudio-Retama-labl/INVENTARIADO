@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Articulos</h1>
@stop

@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open
        modal for @mdo</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open
        modal for @fat</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@getbootstrap">Open modal for @getbootstrap</button>


    <table id="myTable" style="width:100%" class="display table table-striped " style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Serial</th>
                <th>Modelo</th>
                <th>Especificaciones</th>
                <th>Color</th>
                <th>Categoria</th>
                <th>Dependencia</th>
                <th>Financiamiento</th>
                <th>Estado del bien</th>
                <th>Estado </th>
                <th>Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->nombre }}</td>
                    <td>{{ $articulo->serial }}</td>
                    <td>{{ $articulo->Modelo }}</td>
                    <td>{{ $articulo->especificaciones }}</td>
                    <td>{{ $articulo->color }}</td>
                    <td>{{ $articulo->categorias_id }}</td>
                    <td>{{ $articulo->dependencias_id }}</td>
                    <td>{{ $articulo->financiamiento_id }}</td>
                    <td>{{ $articulo->estado_bien }}</td>
                    <td>{{ $articulo->estado }}</td>
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
                    <form action="{{ route('articulos-store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Serial:</label>
                            <textarea class="form-control" name="serial" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Modelo:</label>
                            <input type="text" class="form-control" name="modelo" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Color:</label>
                            <textarea class="form-control" name="color" id="message-text"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Especificaciones:</label>
                            <textarea class="form-control" name="especificaciones" id="especificaciones"></textarea>
                        </div>



                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Dependencias:</label>

                            <select class="form-control" name="dependencia">

                                @foreach ($dependencias as $dependencia)
                                    <option value="{{ $dependencia->id }}">{{ $dependencia->nombre }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Categorias:</label>

                            <select class="form-control" name="categorias">

                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Financiamiento</label>

                            <select class="form-control" name="financiamiento_id" id="financiamiento_id">

                                @foreach ($financiamientos as $financiamiento)
                                    <option value="{{ $financiamiento->id }}">{{ $financiamiento->nombre }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Estado del bien:</label>
                            <input type="text" class="form-control" name="estado_bien" id="recipient-name">
                        </div>

                        <input type="submit" class="btn btn-info" name="reservar"></input>

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
            $('#myTable').DataTable();
        
        });
    </script>



@stop
