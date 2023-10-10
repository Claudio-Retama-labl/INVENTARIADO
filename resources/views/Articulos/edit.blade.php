@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<?php echo ($articulos); ?>
<div class="card shadow mt-5">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Categories</h3>


                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!--  <form action="{{ url('articulos/update/'.  $articulos->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="{{ $articulos->id }}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="{{ $articulos->nombre }}" name="nombre" aria-describedby="nameHelp">
                        <div id="emailHelp" class="form-text">Into your name for category</div>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form> -->

                <form action="{{ url('articulos/update/'. $articulos->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="{{ $articulos->id }}">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" id="recipient-name" value="{{ $articulos->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Serial:</label>
                        <input class="form-control" name="serial" id="message-text" value="{{ $articulos->serial }}"></input>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Modelo:</label>
                        <input type="text" class="form-control" name="modelo" value="{{ $articulos->modelo }}" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Color:</label>
                        <select class="form-control" name="color" aria-label="Default select example">
                            @foreach ($articulos as $articulo)
                            <option value="{{ $articulos->color }}">{{ $articulos->color }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Especificaciones:</label>
                        <textarea class="form-control" name="especificaciones" id="especificaciones">{{ $articulos->especificaciones }}</textarea>
                    </div>



                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Dependencias:</label>
                        <select name="dependencia_id" class="form-control">
                            <option value="">Seleccionar Dependencias</option>
                            @foreach($dependencias as $id => $dependencias->nombre)
                            <option value="{{ $id }}" {{ $articulos->dependencias_id == $id ? 'selected' : '' }}>
                                {{ $dependencias->nombre }}
                            </option>
                            @endforeach
                        </select>


                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Categorias:</label>

                        <select class="form-control" name="categorias">

                            @foreach ($articulos as $articulo)
                            <option value="{{ $articulos->categorias_id }}">{{ $articulos->categorias_id }}</option>
                            @endforeach

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Financiamiento</label>

                        <select class="form-control" name="financiamiento_id" id="financiamiento_id">

                            @foreach ($articulos as $articulo)
                            <option value="{{ $articulos->financiamiento_id }}">{{ $articulos->financiamiento_id }}</option>
                            @endforeach

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Estado del bien:</label>


                        <select class="form-control" aria-label="Default select example" name="estado_bien">
                            <option disabled>Seleccione estado del equipo</option>
                            <option value="{{ $articulos->estado_bien }}">{{ $articulos->estado_bien }}</option>


                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Almacenar</button>
                </form>

            </div>

        </div>
    </div>

</div>

@endsection

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