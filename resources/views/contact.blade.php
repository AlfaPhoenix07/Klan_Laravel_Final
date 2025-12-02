<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLAN - Únete</title>

    <!-- Framework Materialize -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Íconos de Google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="nav-wrapper">
        <div class="container">
            <a href="{{ url('/') }}" class="brand-logo">
                <img src="{{ asset('img/KLAN2.png') }}" alt="logo" class="logo">
            </a>
            <a href="#" data-target="menu-responsive" class="sidenav-trigger right">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/about') }}">Sobre nosotros</a></li>
                <li><a href="{{ url('/servicios') }}">Nuestros servicios</a></li>
                <li><a href="{{ url('/planes') }}">Planes</a></li>
                <li><a href="{{ url('/preguntas') }}">Preguntas</a></li>
                <li><a href="{{ url('/contact') }}" style="color:darkviolet;">Únete</a></li>
            </ul>
        </div>
    </nav>

    <!-- Menú lateral móvil -->
    <ul class="sidenav" id="menu-responsive">
        <li><a href="{{ url('/') }}">Inicio</a></li>
        <li><a href="{{ url('/about') }}">Sobre nosotros</a></li>
        <li><a href="{{ url('/servicios') }}">Nuestros servicios</a></li>
        <li><a href="{{ url('/planes') }}">Planes</a></li>
        <li><a href="{{ url('/preguntas') }}">Preguntas</a></li>
        <li><a href="{{ url('/contact') }}">Únete</a></li>
    </ul>

    <!-- Sección de contacto -->
    <section id="contact" class="container">
        <div class="contact-container">
            <h2 class="center-align">Únete a Nuestro Equipo</h2>
            <p class="center-align">Completa el formulario y adjunta tu currículum para aplicar a nuestras vacantes.</p>

            <!-- Formulario de contacto -->
            <form id="form-contacto" class="formulario" action="{{ route('contacto.guardar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-field">
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="nombre">Nombre completo *</label>
                </div>

                <div class="input-field">
                    <input type="tel" id="telefono" name="telefono" required>
                    <label for="telefono">Teléfono *</label>
                </div>

                <div class="input-field">
                    <input type="email" id="correo" name="correo" required>
                    <label for="correo">Correo electrónico *</label>
                </div>

                <div class="file-field input-field">
                    <div class="btn" style="background-color:#4A90E2;">
                        <span>Subir CV</span>
                        <input type="file" id="cv" name="pdf" required>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Selecciona tu archivo...">
                    </div>
                </div>

                <button type="submit" class="btn waves-effect waves-light" style="width:100%; background-color:#4A90E2;">Enviar Solicitud</button>
            </form>
        </div>
    </section>

    <!-- Modal de confirmación -->
    <div id="modal-confirmacion" class="modal">
        <div class="modal-content center-align">
            <h4>¡Solicitud enviada!</h4>
            <p>Tu información ha sido recibida correctamente. Pronto nos pondremos en contacto contigo.</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect btn-flat">Cerrar</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3><b>KLAN</b></h3>
                <p>Transformando ideas en soluciones tecnológicas innovadoras.</p>
                <p>Tu socio confiable en desarrollo de software.</p>
                <div class="links">
                    <a href="#" title="Facebook">f</a>
                    <a href="#" title="Twitter">t</a>
                    <a href="#" title="LinkedIn">in</a>
                    <a href="#" title="Instagram">ig</a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Servicios</h3>
                <ul>
                    <li><a href="{{ url('/servicios') }}">Desarrollo Web</a></li>
                    <li><a href="{{ url('/servicios') }}">Apps Móviles</a></li>
                    <li><a href="{{ url('/servicios') }}">Software a Medida</a></li>
                    <li><a href="{{ url('/servicios') }}">Consultoría</a></li>
                    <li><a href="{{ url('/servicios') }}">Mantenimiento</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contacto</h3>
                <p><img class="footer-icon" src="{{ asset('img/email-icon.png') }}" alt="email-icon"> contacto@klan.com.mx</p>
                <p><img class="footer-icon" src="{{ asset('img/telefono-icon.png') }}" alt="phone-icon"> +52 (461) 123-4567</p>
                <p><img class="footer-icon" src="{{ asset('img/ubicacion-icon.png') }}" alt="location-icon"> Celaya, Guanajuato, México</p>
                <p><img class="footer-icon" src="{{ asset('img/calendario-icon.png') }}" alt="date-icon"> Lun - Vie: 9:00 AM - 6:00 PM</p>
            </div>

            <div class="footer-section">
                <h3>Enlaces Útiles</h3>
                <ul>
                    <li><a href="{{ url('/about') }}">Sobre Nosotros</a></li>
                    <li><a href="{{ url('/planes') }}">Nuestros Planes</a></li>
                    <li><a href="{{ url('/contact') }}">Únete</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 KLAN. Todos los derechos reservados. | Sitio desarrollado por Cesar Martinez & Jose Leon</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/validaciones.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);
            M.AutoInit();

            var modal = document.querySelectorAll('.modal');
            M.Modal.init(modal);

            const form = document.getElementById('form-contacto');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const instancia = M.Modal.getInstance(document.getElementById('modal-confirmacion'));
                instancia.open();

                setTimeout(() => {
                    form.submit();
                }, 1000);
            });
        });
    </script>

</body>
</html>
