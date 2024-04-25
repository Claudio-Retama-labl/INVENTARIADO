@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Personal</h1>
@stop

@section('content')
    <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo
        Articulo</button>

    <table id="myTable" style="width:100%" class="display table table-striped  ">
        <thead class="bg-info">
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cargo</th>
                <th>Estado</th>
                <!-- <th>Estado </th> -->


                <th>Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personal as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->nombres }}</td>
                    <td>{{ $persona->apellidos }}</td>
                    <td>{{ $persona->cargo }}</td>
                    <td>{{ $persona->estado }}</td>
                    @if ($persona->estado == 1)
                        <a class="btn btn-success" href="{{ url('personal/update_status', $persona->id) }}"
                            onclick="return confirm('Quiere inactivar esta categoria?')">ACTIVE</a>
                    @else
                        <a class="btn btn-warning" href="{{ url('personal/update_status', $persona->id) }}"
                            onclick="return confirm('Quiere activar esta categoria')">INACTIVE</a>
                    @endif
                    </td>
                    <td>
                        <form action="{{ url('personal/update', $persona->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ url('personal/edit', $persona->id) }}" class="btn btn-primary btn-sm">View</a> <a
                                href="{{ url('personal/destroy', $persona->id) }}" class="btn btn-primary btn-sm"
                                onclick="return confirm('Quiere eliminar definitivamente este articulo ?')">Delete</a>

                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Articulos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('personal-store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" name="nombres" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Apellidos</label>
                            <input class="form-control" name="apellidos"></input>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Cargo</label>
                            <input type="text" class="form-control" name="cargo" id="cargo">
                        </div>
                        <button type="submit" class="btn btn-warning">Almacenar</button>
                    </form>
                </div>
                <div class="modal-footer bg-info">
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
