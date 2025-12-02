<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLAN - Planes</title>

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
                <li><a href="{{ url('/planes') }}" style="color:darkviolet;">Planes</a></li>
                <li><a href="{{ url('/preguntas') }}">Preguntas</a></li>
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

    <!-- Contenido -->
    <section id="planes" class="container">
        <div class="planes-container">
            <h2 class="center-align">Nuestros Planes</h2>
            <p class="center-align">Elige el plan que mejor se adapte a las necesidades de tu proyecto:</p>

            <div class="responsive-table">
                <table class="highlight centered">
                    <thead class="blue lighten-2 white-text">
                        <tr>
                            <th>Características</th>
                            <th>Básico</th>
                            <th>Profesional</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td><b>Desarrollo Web</b></td><td>✓</td><td>✓</td><td>✓</td></tr>
                        <tr><td><b>Aplicación Móvil</b></td><td>-</td><td>✓</td><td>✓</td></tr>
                        <tr><td><b>Base de Datos</b></td><td>Básica</td><td>Avanzada</td><td>Completa</td></tr>
                        <tr><td><b>Soporte Técnico</b></td><td>Email</td><td>Email + Chat</td><td>24/7 Dedicado</td></tr>
                        <tr><td><b>Mantenimiento</b></td><td>3 meses</td><td>6 meses</td><td>12 meses</td></tr>
                        <tr><td><b>Integraciones</b></td><td>2 básicas</td><td>5 avanzadas</td><td>Ilimitadas</td></tr>
                        <tr><td><b>Tiempo de Entrega</b></td><td>4-6 semanas</td><td>6-8 semanas</td><td>8-12 semanas</td></tr>
                        <tr><td><b>Precio</b></td><td class="precio">$8,000 MXN</td><td class="precio">$18,000 MXN</td><td class="precio">$35,000 MXN</td></tr>
                    </tbody>
                </table>
            </div>

            <div class="center-align" style="margin-top: 20px;">
                <p><i class="material-icons tiny">info</i> Todos nuestros planes incluyen actualizaciones menores sin costo adicional durante el periodo de soporte.</p>
            </div>
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
                    <a href="#" title="Facebook">f</a>
                    <a href="#" title="Twitter">t</a>
                    <a href="#" title="LinkedIn">in</a>
                    <a href="#" title="Instagram">ig</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);
            M.AutoInit();
        });
    </script>
</body>
</html>
