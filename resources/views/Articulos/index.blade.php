@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Articulos</h1>
@stop

@section('content')
    <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo
        Articulo</button>

    <table id="myTable" style="width:100%" class="display table table-striped  ">
        <thead class="bg-info">
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
                <th>Estado</th>
                <!-- <th>Estado </th> -->


                <th>Acciones </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->nombre }}</td>
                    <td>{{ $articulo->serial }}</td>
                    <td>{{ $articulo->modelo }}</td>
                    <td>{{ $articulo->especificaciones }}</td>
                    <td>{{ $articulo->color }}</td>
                    <td>{{ $articulo->categorias_id }}</td>
                    <td>{{ $articulo->dependencias_id }}</td>
                    <td>{{ $articulo->financiamiento_id }}</td>
                   
                    <td>{{ $articulo->estado }}</td>
                    <!-- <td>{{ $articulo->estado }}</td> -->
                    <!-- <td> @if ($articulo->estado == 1)
    <a class="btn btn-success" href="{{ url('articulos/update_status', $articulo->id) }}" onclick="return confirm('Quiere inactivar esta categoria?')">ACTIVE</a>
@else
    <a class="btn btn-warning" href="{{ url('articulos/update_status', $articulo->id) }}" onclick="return confirm('Quiere activar esta categoria')">INACTIVE</a>
    @endif
                </td> -->
                    <td>
                        <form action="{{ url('articulos/update', $articulo->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ url('articulos/edit', $articulo->id) }}" class="btn btn-primary btn-sm">View</a> <a
                                href="{{ url('articulos/destroy', $articulo->id) }}" class="btn btn-primary btn-sm"
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
                    <form action="{{ route('articulos-store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Serial:</label>
                            <input class="form-control" name="serial" id="serial"></input>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Modelo:</label>
                            <input type="text" class="form-control" name="modelo" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Color:</label>
                            <select class="form-control" name="color" aria-label="Default select example">
                                <option disabled>Seleccione color</option>
                                <option value="Negro">Negro</option>
                                <option value="Blanco">Blanco</option>
                                <option value="Gris">Gris</option>
                                <option value="Negro-Gris">Negro-Gris</option>
                                <option value="Blanco-Gris">Blanco-Gris</option>
                                <option value="Amarillo">Amarillo</option>
                                <option value="Azul">Azul</option>
                                <option value="Rojo">Rojo</option>
                                <option value="Verde">Verde</option>
                            </select>
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
                            <label for="message-text" class="col-form-label">Numero de caja:</label>

                            <select class="form-control" name="numero_caja">


                                <option value="1">N°1</option>
                                <option value="2">N°2</option>
                                <option value="3">N°3</option>
                                <option value="4">N°4</option>
                                <option value="5">N°5</option>
                                <option value="6">N°6</option>
                                <option value="7">N°7</option>
                                <option value="8">N°8</option>
                                <option value="9">N°9</option>
                                <option value="10">N°10</option>
                                <option value="11">N°11</option>
                                <option value="11">N°11</option>

                                <option value="12">N°12</option>
                                <option value="13">N°13</option>
                                <option value="14">N°14</option>
                                <option value="15">N°15</option>
                                <option value="16">N°16</option>
                                <option value="17">N°17</option>
                                <option value="18">N°18</option>
                                <option value="18">N°19</option>
                                <option value="20">N°20</option>
                                <option value="21">N°21</option>
                                <option value="22">N°22</option>
                                <option value="23">N°23</option>
                                <option value="24">N°24</option>

                                <option value="25">N°25</option>
                                <option value="26">N°26</option>
                                <option value="27">N°27</option>
                                <option value="28">N°28</option>
                                <option value="29">N°29</option>
                                <option value="30">N°30</option>
                                <option value="31">N°31</option>
                                <option value="32">N°32</option>
                                <option value="33">N°33</option>
                                <option value="34">N°34</option>
                                <option value="35">N°35</option>

                                <option value="36">N°36</option>
                                <option value="37">N°37</option>
                                <option value="38">N°38</option>
                                <option value="39">N°39</option>
                                <option value="40">N°40</option>
                                <option value="41">Sin caja</option>

                              
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
                            <label for="message-text" class="col-form-label">Personal:</label>

                            <select class="form-control" name="personal">

                                @foreach ($personal as $persona)
                                    <option value="{{ $persona->id }}">{{ $persona->nombres }}</option>
                                @endforeach

                            </select>
                        </div>

                                                                                            
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Financiamiento</label>

                            <select class="form-control" name="financiamiento" id="financiamiento">

                                @foreach ($financiamientos as $financiamiento)
                                    <option value="{{ $financiamiento->id }}">{{ $financiamiento->nombre }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Estado del bien:</label>


                            <select class="form-control" aria-label="Default select example" name="estado_bien">
                                <option disabled>Seleccione estado del equipo</option>
                                <option value="Negro">Nuevo</option>
                                <option value="Blanco">Usado</option>
                                <option value="Gris">Malo</option>

                            </select>
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
