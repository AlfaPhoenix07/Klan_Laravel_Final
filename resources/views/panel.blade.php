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
    </style>

</head>
<body>

<div class="row" style="margin:0;">
    
    <!-- Sidebar -->
    <div class="col s2 sidebar">
        <a class="dashboard-title" style="color:white;">Admin</a>
        <br>
        <a href="#" class="active"><i class="material-icons left">dashboard</i>Dashboard</a>
        <a href="#"><i class="material-icons left">assignment</i>Solicitudes</a>
        <a href="#"><i class="material-icons left">help</i>Preguntas</a>
        <a href="#"><i class="material-icons left">logout</i>Salir</a>
    </div>

    <!-- Contenido -->
    <div class="col s10">

        <!-- Topbar -->
        <div class="topbar">
            <span class="dashboard-title">Dashboard</span>
        </div>

        <!-- Tarjetas -->
        <div class="container" style="margin-top:30px;">

            <div class="row">

                <div class="col s12 m6 l4">
                    <div class="card z-depth-1">
                        <div class="card-content">
                            <span class="card-title">Total de CV enviados</span>
                            <p>Número total de CVs recibidos.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l4">
                    <div class="card z-depth-1">
                        <div class="card-content">
                            <span class="card-title">Total de preguntas</span>
                            <p>Preguntas enviadas por los usuarios.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l4">
                    <div class="card z-depth-1">
                        <div class="card-content">
                            <span class="card-title">Aceptados este mes</span>
                            <p>Solicitudes aprobadas.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l4">
                    <div class="card z-depth-1">
                        <div class="card-content">
                            <span class="card-title">Rechazados este mes</span>
                            <p>Solicitudes rechazadas.</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l4">
                    <div class="card z-depth-1">
                        <div class="card-content">
                            <span class="card-title">Porcentaje de aceptación</span>
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
