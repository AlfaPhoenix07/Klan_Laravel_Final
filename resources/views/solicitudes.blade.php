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
                            <!-- Formulario para eliminar: lo dejamos con display:none porque usaremos el modal -->
                            <form method="POST" action="{{ route('solicitudes.destroy', $sol->id) }}" class="delete-form" id="delete-form-{{ $sol->id }}" style="display:none;">
                                @csrf
                                @method('DELETE')
                            </form>

                            <!-- Botón que abre el modal -->
                            <a href="#confirm-delete" data-id="{{ $sol->id }}" class="btn-small grey darken-1 modal-trigger btn-delete">
                                <i class="material-icons">delete</i>
                            </a>
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
<!-- Modal confirmación -->
<div id="confirm-delete" class="modal">
  <div class="modal-content">
    <h5>Confirmar eliminación</h5>
    <p>¿Estás seguro que quieres eliminar este candidato? Esta acción no se puede deshacer.</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close btn-flat">Cancelar</a>
    <button id="confirm-delete-btn" class="btn red">Eliminar</button>
  </div>

  <script>
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar modales Materialize
    var elems = document.querySelectorAll('.modal');
    M.Modal.init(elems);

    const modalElem = document.getElementById('confirm-delete');
    const modalInstance = M.Modal.getInstance(modalElem) || M.Modal.init(modalElem);

    let currentDeleteId = null;

    // Cuando se hace click en un boton .btn-delete guardamos el id y abrimos modal
    document.querySelectorAll('.btn-delete').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            currentDeleteId = this.getAttribute('data-id');
            modalInstance.open();
        });
    });

    // Botón confirmar dentro del modal: envía el formulario
    document.getElementById('confirm-delete-btn').addEventListener('click', function() {
        if (!currentDeleteId) return;

        const form = document.getElementById('delete-form-' + currentDeleteId);
        if (!form) return;

        // enviar formulario normal (recarga)
        form.submit();

        modalInstance.close();
    });

});
</script>
</div>
</html>
