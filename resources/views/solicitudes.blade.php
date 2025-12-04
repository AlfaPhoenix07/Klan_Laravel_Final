<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitudes - Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
            background: #f4f6f9;
        }

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
            padding: 4px 10px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            color: white;
        }

        .action-btn {
            margin-right: 8px;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background: #263238;
            padding-top: 40px;
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
            padding: 5px 10px;
            border-radius: 6px;
            font-weight: bold;
            color: white;
            font-size: 0.8rem;
        }

        .status-badge.pending {
            background-color: #fabe4f;
        }

        .status-badge.accepted {
            background-color: #4caf50;
        }

        .status-badge.rejected {
            background-color: #f44336;
        }
    </style>
</head>
<body>

<div class="row" style="margin:0;">

    <!-- Sidebar -->
    <div class="col s2 sidebar">
        <a class="dashboard-title" style="color:white;">Admin</a>
        <br>
        <a href="{{ url('/admin') }}"><i class="material-icons left">dashboard</i>Dashboard</a>
        <a href="{{ url('/solicitudes') }}" class="active"><i class="material-icons left">assignment</i>Solicitudes</a>
        <a href="#"><i class="material-icons left">help</i>Preguntas</a>
        <a href="{{ url('/') }}"><i class="material-icons left">logout</i>Salir</a>
    </div>

    <!-- Contenido -->
    <div class="col s10">

        <!-- Topbar -->
        <div class="topbar">
            <span class="dashboard-title">Solicitudes</span>
        </div>

        <div class="container" style="margin-top:30px;">

            <div class="card">
                <div class="card-content">

                    <span class="card-title">Lista de candidatos</span>
                    <p>Panel solo para ADMINISTRADORES.</p>

                    <table class="highlight responsive-table" style="margin-top:20px;">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>CV</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

@foreach($solicitudes as $sol)
<tr>
    <td>{{ $sol->nombre }}</td>
    <td>{{ $sol->email }}</td>
    <td>{{ $sol->telefono }}</td>

    <td>
        <a href="{{ asset('storage/' . $sol->pdf) }}" target="_blank">Ver CV</a>
            
    </td>

    <td>
        @if($sol->estatus == 'pendiente')
            <span class="status-badge pending">Pendiente</span>
        @elseif($sol->estatus == 'aceptado')
            <span class="status-badge accepted">Aceptado</span>
        @else
            <span class="status-badge rejected">Rechazado</span>
        @endif
    </td>

    <td>
    <a href="{{ route('solicitudes.aceptar', $sol->id) }}" class="btn-small green">✓</a>
    <a href="{{ route('solicitudes.rechazar', $sol->id) }}" class="btn-small red">X</a>
</td>

</tr>
@endforeach

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
