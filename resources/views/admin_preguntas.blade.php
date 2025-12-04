<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Preguntas - Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
            background: #f4f6f9;
            margin: 0;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background: #263238;
            padding-top: 40px;
            position: fixed;
            width: 16.66667%;
        }

        .sidebar a {
            display: block;
            padding: 15px 25px;
            color: #eceff1;
            font-size: 15px;
            transition: 0.2s;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
        }

        .sidebar .active {
            background: rgba(255,255,255,0.2);
            font-weight: bold;
        }

        /* Contenido principal */
        .main-content {
            margin-left: 16.66667%;
            width: 83.33333%;
        }

        /* Topbar */
        .topbar {
            background: white;
            padding: 15px 25px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .dashboard-title {
            font-size: 22px;
            font-weight: 600;
        }

        .status-badge {
            padding: 5px 12px;
            border-radius: 6px;
            font-weight: bold;
            color: white;
            font-size: 0.8rem;
            display: inline-block;
        }

        .status-badge.importante {
            background-color: #ff9800;
        }

        .status-badge.normal {
            background-color: #9e9e9e;
        }

        .pregunta-text {
            max-width: 300px;
            word-wrap: break-word;
        }
    </style>
</head>
<body>

<div class="row" style="margin:0;">

    <!-- Sidebar -->
    <div class="sidebar">
        <a class="dashboard-title" style="color:white;">Admin</a>
        <br>
        <a href="{{ route('admin.dashboard') }}"><i class="material-icons left">dashboard</i>Dashboard</a>
        <a href="{{ route('solicitudes') }}"><i class="material-icons left">assignment</i>Solicitudes</a>
        <a href="{{ route('admin.preguntas') }}" class="active"><i class="material-icons left">help</i>Preguntas</a>
        <a href="{{ url('/') }}"><i class="material-icons left">logout</i>Salir</a>
    </div>

    <!-- Contenido -->
    <div class="main-content">

        <!-- Topbar -->
        <div class="topbar">
            <span class="dashboard-title">Gestión de Preguntas</span>
        </div>

        <div class="container" style="margin-top:30px; width: 95%;">

            @if(session('success'))
                <div class="card-panel green lighten-4 green-text text-darken-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-content">

                    <span class="card-title">Preguntas enviadas por usuarios</span>
                    <p>Marca las preguntas importantes para mostrarlas en la sección de "Preguntas Frecuentes".</p>

                    <table class="highlight responsive-table" style="margin-top:20px;">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Pregunta</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($preguntas as $pregunta)
                            <tr>
                                <td>{{ $pregunta->nombre }}</td>
                                <td>{{ $pregunta->correo }}</td>
                                <td class="pregunta-text">{{ $pregunta->pregunta }}</td>
                                <td>{{ $pregunta->created_at->format('d/m/Y') }}</td>
                                <td>
                                    @if($pregunta->es_importante)
                                        <span class="status-badge importante">⭐ Importante</span>
                                    @else
                                        <span class="status-badge normal">Normal</span>
                                    @endif
                                </td>
                                <td>
                                    @if($pregunta->es_importante)
                                        <!-- Botón para desmarcar como importante -->
                                        <a href="{{ route('preguntas.no-importante', $pregunta->id) }}" 
                                           class="btn-small grey" 
                                           title="Desmarcar como importante">
                                            <i class="material-icons">star_border</i>
                                        </a>
                                    @else
                                        <!-- Botón para marcar como importante -->
                                        <a href="{{ route('preguntas.importante', $pregunta->id) }}" 
                                           class="btn-small orange" 
                                           title="Marcar como importante">
                                            <i class="material-icons">star</i>
                                        </a>
                                    @endif

                                    <!-- Botón eliminar -->
                                    <form method="POST" 
                                          action="{{ route('preguntas.destroy', $pregunta->id) }}" 
                                          style="display:inline;" 
                                          onsubmit="return confirm('¿Estás seguro de eliminar esta pregunta?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-small red">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="center-align">No hay preguntas registradas</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>