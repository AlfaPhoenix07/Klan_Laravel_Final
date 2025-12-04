<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Admin</title>
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

        /* Cards con altura uniforme */
        .metric-card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .metric-card .card-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .metric-card .card-title {
            font-size: 18px !important;
            font-weight: 500;
            margin-bottom: 10px;
            color: #263238;
        }

        .metric-card p {
            color: #607d8b;
            font-size: 14px;
            margin: 0;
        }

        /* Espaciado entre filas */
        .card-row {
            margin-bottom: 20px;
        }

    </style>

</head>
<body>

<div class="row" style="margin:0;">
    
    <!-- Sidebar -->
    <div class="sidebar">
        <a class="dashboard-title" style="color:white;">Admin</a>
        <br>
        <a href="#" class="active"><i class="material-icons left">dashboard</i>Dashboard</a>
        <a href="{{ url('/solicitudes') }}"><i class="material-icons left">assignment</i>Solicitudes</a>
        <a href="{{ route('admin.preguntas') }}"><i class="material-icons left">help</i>Preguntas</a>
        <a href="{{ url('/') }}"><i class="material-icons left">logout</i>Salir</a>
    </div>

    <!-- Contenido -->
    <div class="main-content">

        <!-- Topbar -->
        <div class="topbar">
            <span class="dashboard-title">Dashboard</span>
        </div>

        <!-- Tarjetas -->
        <div class="container" style="margin-top:30px; ">

            <!-- Primera fila: 3 tarjetas -->
            <div class="row card-row">
                <div class="col s12 m4">
                    <div class="card z-depth-1 metric-card">
                        <div class="card-content">
                            <span class="card-title">Total de CV enviados</span>
                            <div class="metric-number">{{ $totalCVs }}</div>
                            <p>Número total de CVs recibidos.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card z-depth-1 metric-card">
                        <div class="card-content">
                            <span class="card-title">Total de preguntas</span>
                             <div class="metric-number">{{ $totalPreguntas }}</div>
                            <p>Preguntas enviadas por los usuarios.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card z-depth-1 metric-card">
                        <div class="card-content">
                            <span class="card-title">Aceptados este mes</span>
                            <p>Solicitudes aprobadas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Segunda fila: 2 tarjetas -->
            <div class="row card-row">
                <div class="col s12 m6">
                    <div class="card z-depth-1 metric-card">
                        <div class="card-content">
                            <span class="card-title">Rechazados este mes</span>
                            <div class="metric-number">{{ $rechazadosMes }}</div>
                            <p>Solicitudes rechazadas.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card z-depth-1 metric-card">
                        <div class="card-content">
                            <span class="card-title">Porcentaje de aceptación</span>
                             <div class="metric-number">{{ $porcentajeAceptacion }}%</div>
                            <p>Índice de aceptación mensual.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>