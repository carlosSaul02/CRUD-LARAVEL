<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Solicitudes</title>
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
                            <a class="nav-link active" href="{{ url('/solicitudes') }}">SOLICITUDES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/equipos') }}">EQUIPOS</a>
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
        <div class="container mt-1 bg">
            <h1 class="text-center">SOLICITUDES DE EQUIPOS</h1>

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
                            <th scope="col">Tipo de Equipo</th>
                            <th scope="col">Marca de Equipo</th>
                            <th scope="col">Modelo de Equipo</th>
                            <th scope="col">Accion</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($equipos as $equipo)
                            <tr>
                                <td>{{ $equipo->id }}</td>
                                <td>{{ $equipo->tipo_equipo }}</td>
                                <td>{{ $equipo->marca_equipo }}</td>
                                <td>{{ $equipo->modelo_equipo }}</td>
                                <td>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $equipo->id }}">Solicitar
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal{{ $equipo->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel{{ $equipo->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $equipo->id }}">
                                                Confirmacion</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <form class="row g-3" action="{{ route('Solicitudes.store') }}"
                                                method="post">
                                                @csrf

                                                <div class="form-group">
                                                    <label class="form-label" for="cuenta_usuario">Seleccione su numero
                                                        de
                                                        cuenta:*</label>
                                                    <select required class="form-select" id="cuenta_usuario"
                                                        name="cuenta_usuario">
                                                        @foreach ($usuarios as $usuario)
                                                            <option value="{{ $usuario->cuenta_usuario }}">
                                                                {{ $usuario->cuenta_usuario }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="usuario_id">Id Usuario*</label>
                                                    <input required class="form-control" type="text" maxlength="3"
                                                        minlength="1" id="usuario_id" name="usuario_id" pattern="[0-9]"
                                                        readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="nombre_usuario">Nombre de
                                                        Estudiante:*</label>
                                                    <input required class="form-control" minlength="3" type="text"
                                                        id="nombre_usuario" name="nombre_usuario" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="equipo_id">Id Equipo*</label>
                                                    <input required class="form-control" type="text" maxlength="3"
                                                        readonly minlength="1" id="equipo_id" name="equipo_id"
                                                        pattern="[0-9]" value="{{ $equipo->id }}">
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label" for="tipo_equipo">Tipo:*</label>
                                                    <input required class="form-control" type="text"
                                                        id="tipo_equipo" name="tipo_equipo"
                                                        value="{{ $equipo->tipo_equipo }}" readonly>
                                                </div>


                                                <div class="form-group">
                                                    <label class="form-label" for="marca_equipo">Marca:*</label>
                                                    <input required class="form-control" type="text"
                                                        id="marca_equipo" name="marca_equipo"
                                                        value="{{ $equipo->marca_equipo }}" readonly>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label class="form-label" for="modelo_equipo">Modelo:*</label>
                                                    <input required class="form-control" type="text"
                                                        id="modelo_equipo" name="modelo_equipo"
                                                        value="{{ $equipo->modelo_equipo }}" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="fecha_solicitud{{ $equipo->id }}">Fecha de
                                                        Solicitud:*</label>
                                                    <input required class="form-control" type="datetime-local"
                                                        id="fecha_solicitud{{ $equipo->id }}"
                                                        name="fecha_solicitud" readonly>
                                                </div>



                                                <div class="form-group">
                                                    <label class="form-label" for="estado_solicitud">Estado:*</label>
                                                    <input required class="form-control" type="text"
                                                        id="estado_solicitud" name="estado_solicitud"
                                                        value="Pendiente" readonly>
                                                </div>

                                                <br>
                                                <div>
                                                    <button type="submit" class="btn btn-success">GUARDAR</button>
                                                </div>
                                                <div>
                                                    <p>Requerido*</p>
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

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Obtener el elemento del campo de fecha específico para este modal
                                    var fechaSolicitudInput{{ $equipo->id }} = document.getElementById(
                                        'fecha_solicitud{{ $equipo->id }}');

                                    // Obtener la fecha y hora actual en el formato adecuado para datetime-local
                                    var fechaActual{{ $equipo->id }} = new Date().toISOString().slice(0, 16);

                                    // Asignar la fecha actual al campo de fecha específico para este modal
                                    fechaSolicitudInput{{ $equipo->id }}.value = fechaActual{{ $equipo->id }};

                                    // Desactivar la edición del campo
                                    fechaSolicitudInput{{ $equipo->id }}.addEventListener('input', function() {
                                        this.value = fechaActual{{ $equipo->id }};
                                    });
                                });
                            </script>
                        @endforeach
                    </tbody>
                </table>
            </div>




        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var equipos = <?php echo json_encode($equipos); ?>;
                var usuarios = <?php echo json_encode($usuarios); ?>;

                equipos.forEach(function(equipo) {
                    var modalId = 'exampleModal' + equipo.id;
                    var cuentaUsuarioSelect = document.getElementById(modalId).querySelector('.form-select');
                    var nombreUsuarioInput = document.getElementById(modalId).querySelector(
                        '[name="nombre_usuario"]');
                    var usuarioIdInput = document.getElementById(modalId).querySelector('[name="usuario_id"]');

                    if (cuentaUsuarioSelect && nombreUsuarioInput && usuarioIdInput) {
                        cuentaUsuarioSelect.addEventListener('change', function() {
                            var numeroCuentaSeleccionado = cuentaUsuarioSelect.value;

                            var usuarioEncontrado = usuarios.find(function(usuario) {
                                return usuario.cuenta_usuario === numeroCuentaSeleccionado;
                            });

                            if (usuarioEncontrado) {
                                nombreUsuarioInput.value = usuarioEncontrado.nombre_usuario;
                                usuarioIdInput.value = usuarioEncontrado.id;
                            } else {
                                nombreUsuarioInput.value = '';
                                usuarioIdInput.value = '';
                            }
                        });

                        // Salida de depuración a la consola
                        console.log('Configurando eventos para modal ' + modalId);
                    } else {
                        console.error('Elementos no encontrados para modal ' + modalId);
                    }
                });
            });
        </script>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>



</body>


</html>
