<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>APROBACION DE SOLICITUDES</title>
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
                            <a class="nav-link" href="{{ url('/equipos') }}">EQUIPOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/aprobacion') }}">APROBACION DE SOLICITUDES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <div class="container mt-1 bg">
            <h1 class="text-center">APROBACION DE SOLICITUDES</h1>

            @if (session('exito'))
                <div class="alert alert-success" role="alert">
                    {{ session('exito') }}
                </div>
            @endif


            <div class="table-responsive">
                <table class="table table-hover table-dark table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ID Usuario</th>
                            <th scope="col">Cuenta Usuario</th>
                            <th scope="col">Nombre Usuario</th>
                            <th scope="col">ID Equipo</th>
                            <th scope="col">Tipo Equipo</th>
                            <th scope="col">Marca de Equipo</th>
                            <th scope="col">Modelo de Equipo</th>
                            <th scope="col">Fecha Solicitud</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Creado</th>
                            <th scope="col">Actualizado</th>
                            <th scope="col">Accion</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($datos as $solicitud)
                            <tr>
                                <td>{{ $solicitud->id }}</td>
                                <td>{{ $solicitud->usuario_id }}</td>
                                <td>{{ $solicitud->cuenta_usuario }}</td>
                                <td>{{ $solicitud->nombre_usuario }}</td>
                                <td>{{ $solicitud->equipo_id }}</td>
                                <td>{{ $solicitud->tipo_equipo }}</td>
                                <td>{{ $solicitud->marca_equipo }}</td>
                                <td>{{ $solicitud->modelo_equipo }}</td>
                                <td>{{ $solicitud->fecha_solicitud }}</td>
                                <td>{{ $solicitud->estado_solicitud }}</td>
                                <td>{{ $solicitud->created_at }}</td>
                                <td>{{ $solicitud->updated_at }}</td>
                                <td>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $solicitud->id }}">Aprobar
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal{{ $solicitud->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel{{ $solicitud->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $solicitud->id }}">
                                                Confirmacion</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>¿Está seguro que quiere aplicar este estado a la solicitud?</p>

                                            <form action="{{ route('Solicitudes.update', $solicitud->id) }}"
                                                method=post>
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label class="form-label" for="estado_solicitud">Estado:*</label>
                                                    <input required class="form-control" type="text"
                                                        id="estado_solicitud" name="estado_solicitud"
                                                        value="Aprobado" readonly>
                                                </div>
                                                <br><br>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">APROBAR</button>
                                                </div>
                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
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
