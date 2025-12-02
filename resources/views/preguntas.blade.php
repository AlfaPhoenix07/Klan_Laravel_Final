<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLAN - Preguntas Frecuentes</title>

    <!-- Framework Materialize -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                <li><a href="{{ url('/preguntas') }}" style="color:darkviolet;">Preguntas</a></li>
                <li><a href="{{ url('/contact') }}">Únete</a></li>
            </ul>
        </div>
    </nav>

    <!-- Menú lateral (móviles) -->
    <ul class="sidenav" id="menu-responsive">
        <li><a href="{{ url('/') }}">Inicio</a></li>
        <li><a href="{{ url('/about') }}">Sobre nosotros</a></li>
        <li><a href="{{ url('/servicios') }}">Nuestros servicios</a></li>
        <li><a href="{{ url('/planes') }}">Planes</a></li>
        <li><a href="{{ url('/preguntas') }}">Preguntas</a></li>
        <li><a href="{{ url('/contact') }}">Únete</a></li>
    </ul>

    <!-- Preguntas frecuentes -->
    <section id="faq" class="container">
        <h2 class="center-align">Resolvemos tus dudas</h2>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">help_outline</i>¿Qué tipo de proyectos desarrollan?</div>
                <div class="collapsible-body blue lighten-1 white-text">
                    <p>Trabajamos en desarrollo web, aplicaciones móviles, integración de sistemas y consultoría tecnológica.</p>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">schedule</i>¿Cuánto tiempo tarda un proyecto?</div>
                <div class="collapsible-body blue lighten-1 white-text">
                    <p>Depende del plan elegido: desde 4 semanas (básico) hasta 12 semanas (enterprise).</p>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">build</i>¿Ofrecen soporte después de entregar el proyecto?</div>
                <div class="collapsible-body blue lighten-1 white-text">
                    <p>Sí, nuestros planes incluyen soporte y mantenimiento entre 3 y 12 meses.</p>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">contact_mail</i>¿Cómo puedo contratar un servicio?</div>
                <div class="collapsible-body blue lighten-1 white-text">
                    <p>Completa el formulario en la sección de <a href="{{ url('/contact') }}">Contacto</a> y nos pondremos en comunicación contigo.</p>
                </div>
            </li>
        </ul>
    </section>

    <!-- Formulario -->
    <section id="nueva-pregunta" class="container">
        <div class="contact-container">
            <h2 class="center-align">¿Tienes otra pregunta?</h2>
            <p class="center-align">Envíanos tu duda y la responderemos lo antes posible.</p>

            <form class="formulario" action="{{ route('pregunta.guardar') }}" method="POST">
                @csrf
                <div class="input-field">
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="nombre">Tu nombre *</label>
                </div>

                <div class="input-field">
                    <input type="email" id="correo" name="correo" required>
                    <label for="correo">Tu correo electrónico *</label>
                </div>

                <div class="input-field">
                    <textarea id="pregunta" name="pregunta" class="materialize-textarea" required></textarea>
                    <label for="pregunta">Escribe tu pregunta *</label>
                </div>

                <button type="submit" class="btn waves-effect waves-light" style="width:100%; background-color:#4A90E2;">
                    Enviar Pregunta
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3><b>KLAN</b></h3>
                <p>Transformando ideas en soluciones tecnológicas innovadoras.</p>
                <p>Tu socio confiable en desarrollo de software.</p>
                <div class="links">
                    <a href="#">f</a>
                    <a href="#">t</a>
                    <a href="#">in</a>
                    <a href="#">ig</a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Servicios</h3>
                <ul>
                    <li><a href="#servicios">Desarrollo Web</a></li>
                    <li><a href="#servicios">Apps Móviles</a></li>
                    <li><a href="#servicios">Software a Medida</a></li>
                    <li><a href="#servicios">Consultoría</a></li>
                    <li><a href="#servicios">Mantenimiento</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contacto</h3>
                <p><img class="footer-icon" src="{{ asset('img/email-icon.png') }}" alt="email"> contacto@klan.com.mx</p>
                <p><img class="footer-icon" src="{{ asset('img/telefono-icon.png') }}" alt="phone"> +52 (461) 123-4567</p>
                <p><img class="footer-icon" src="{{ asset('img/ubicacion-icon.png') }}" alt="location"> Celaya, Guanajuato, México</p>
                <p><img class="footer-icon" src="{{ asset('img/calendario-icon.png') }}" alt="date"> Lun - Vie: 9:00 AM - 6:00 PM</p>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.Sidenav.init(document.querySelectorAll('.sidenav'));
            M.Collapsible.init(document.querySelectorAll('.collapsible'));
        });
    </script>
</body>
</html>
