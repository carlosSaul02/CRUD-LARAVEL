<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Editar Equipos</title>
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
            <h1 class="text-center">EDITAR EQUIPOS</h1>

            @if (session('exito'))
                <div class="alert alert-success" role="alert">
                    {{ session('exito') }}
                </div>
            @endif


            <form class="row g-3" action="{{ route('equipos.update', $editados->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6">
                    <label class="form-label" for="serie_equipo">Serie del equipo:*</label>
                    <input required class="form-control" maxlength="10" type="text" id="serie_equipo"
                        name="serie_equipo" value="{{ $editados->serie_equipo }}">
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label" for="etiqueta_inventario_equipo">Etiqueta de Invetario:*</label>
                    <input required class="form-control" maxlength="10" type="text" id="etiqueta_inventario_equipo"
                        name="etiqueta_inventario_equipo" value="{{ $editados->etiqueta_inventario_equipo }}">
                </div>

                <div class="form-group col-md-3">
                    <label class="form-label" for="tipo_equipo">Tipo:*</label>
                    <select class="form-select" name="tipo_equipo" id="tipo_equipo">
                        <option value="Computadora" {{ $editados->tipo_equipo == 'Computadora' ? 'selected' : '' }}>
                            Computadora</option>
                        <option value="Impresora" {{ $editados->tipo_equipo == 'Impresora' ? 'selected' : '' }}>
                            Impresora</option>
                        <option value="Tablet" {{ $editados->tipo_equipo == 'Tablet' ? 'selected' : '' }}>Tablet
                        </option>
                        <option value="SmarthPhone" {{ $editados->tipo_equipo == 'SmarthPhone' ? 'selected' : '' }}>
                            SmarthPhone</option>
                        <option value="Camara" {{ $editados->tipo_equipo == 'Camara' ? 'selected' : '' }}>Camara
                        </option>
                        <option value="Escaner" {{ $editados->tipo_equipo == 'Escaner' ? 'selected' : '' }}>Escaner
                        </option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label" for="marca_equipo">Marca:*</label>
                    <input required class="form-control" type="text" id="marca_equipo" name="marca_equipo"
                        value="{{ $editados->marca_equipo }}">
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label" for="modelo_equipo">Modelo:*</label>
                    <input required class="form-control" type="text" id="modelo_equipo" name="modelo_equipo"
                        value="{{ $editados->modelo_equipo }}">
                </div>

                <div class="form-group col-md-6">
                    <label class="form-label" for="descripcion_equipo">Descripcion:*</label>
                    <input required class="form-control" maxlength="150" type="text" id="descripcion_equipo"
                        name="descripcion_equipo"
                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        value="{{ $editados->descripcion_equipo }}">
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a href="{{ route('Equipos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
                <div class="col-12">
                    <p>Requerido*</p>
                </div>

            </form>

        </div>


    </main>

  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


</html>
