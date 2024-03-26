<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Equipos</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/inicio') }}">Prueba Semana 3</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/inicio') }}">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/usuarios') }}">USUARIOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/solicitudes') }}">SOLICITUDES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/equipos') }}">EQUIPOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/aprobacion') }}">APROBACION DE SOLICITUDES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <div class="container mt-1 mb-1">
            <h1 class="text-center">EQUIPOS</h1>

            @if (session('exito'))
                <div class="alert alert-success" role="alert">
                    {{ session('exito') }}
                </div>
            @endif

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="text-center">EXPANDIR PARA AGREGAR NUEVOS EQUIPOS</h5>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <form class="row g-3" action="{{ route('Equipos.store') }}" method="post">
                                @csrf
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="serie_equipo">Serie del equipo:*</label>
                                    <input required class="form-control" maxlength="10" type="text" id="serie_equipo"
                                        name="serie_equipo">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="etiqueta_inventario_equipo">Etiqueta de
                                        Invetario:*</label>
                                    <input required class="form-control" maxlength="10" type="text"
                                        id="etiqueta_inventario_equipo" name="etiqueta_inventario_equipo">
                                </div>

                                <div class="form-group col-md-3">
                                    <label class="form-label" for="tipo_equipo">Tipo:*</label>
                                    <select class="form-select" name="tipo_equipo" id="tipo_equipo">
                                        <option value="Computadora">Computadora</option>
                                        <option value="Impresora">Impresora</option>
                                        <option value="Tablet">Tablet</option>
                                        <option value="SmarthPhone">SmarthPhone</option>
                                        <option value="Camara">Camara</option>
                                        <option value="Escaner">Escaner</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="marca_equipo">Marca:*</label>
                                    <input required class="form-control" type="text" id="marca_equipo"
                                        name="marca_equipo">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="modelo_equipo">Modelo:*</label>
                                    <input required class="form-control" type="text" id="modelo_equipo"
                                        name="modelo_equipo">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="descripcion_equipo">Descripcion:*</label>
                                    <input required class="form-control" maxlength="150" type="text"
                                        id="descripcion_equipo" name="descripcion_equipo"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">GUARDAR</button>
                                </div>
                                <div class="col-12">
                                    <p>Requerido*</p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <div class="container mt-5">
            <h2 class="text-center">LISTADO DE EQUIPOS</h2>
            <div class="table-responsive">
                <table class="table table-hover table-dark table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Numero de Serie</th>
                            <th scope="col">Etiqueta de Inventario</th>
                            <th scope="col">Tipo de Equipo</th>
                            <th scope="col">Marca de Equipo</th>
                            <th scope="col">Modelo de Equipo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Creado</th>
                            <th scope="col">Actualizado</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->serie_equipo }}</td>
                                <td>{{ $item->etiqueta_inventario_equipo }}</td>
                                <td>{{ $item->tipo_equipo }}</td>
                                <td>{{ $item->marca_equipo }}</td>
                                <td>{{ $item->modelo_equipo }}</td>
                                <td>{{ $item->descripcion_equipo }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $item->id }}">
                                        Eliminar
                                    </button>
                                    <a href="{{ route('equipos.edit', $item->id) }}"
                                        class="btn btn-primary">EDITAR</a>
                                </td>
                            </tr>

                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $item->id }}">
                                                Confirmacion</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Desea eliminar este equipo?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <form action="{{ route('equipos.destroy', $item->id) }}" method=post>
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


</html>
