<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLAN - Sobre Nosotros</title>

    <!-- Materialize -->
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
                <li><a href="{{ url('/about') }}" style="color:darkviolet;">Sobre nosotros</a></li>
                <li><a href="{{ url('/servicios') }}">Nuestros servicios</a></li>
                <li><a href="{{ url('/planes') }}">Planes</a></li>
                <li><a href="{{ url('/preguntas') }}">Preguntas</a></li>
                <li><a href="{{ url('/contact') }}">Únete</a></li>
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

    <!-- Contenido principal -->
    <section id="about" class="container">
        <div class="row">
            <div class="col s12 m6">
                <h2>Sobre Nosotros</h2>
                <h3>¿Quiénes somos?</h3>
                <p>En KLAN, creemos en el poder de la tecnología para impulsar el crecimiento y la eficiencia. Fundada en 2015, nuestra empresa se ha consolidado como un referente en el desarrollo de software personalizado, gracias a un equipo de profesionales apasionados por la tecnología y comprometidos con la excelencia.</p>
            </div>

            <div class="col s12 m6">
                <img src="https://cdn-3.expansion.mx/dims4/default/0fa6a34/2147483647/strip/true/crop/1254x836+0+0/resize/1800x1200!/format/webp/quality/80/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F6e%2F11%2F637687f94bbeb55715f3baf030cb%2Fregreso-oficina.jpg" alt="Profesional trabajando en computadora" style="width: 100%; height: 180px; object-fit: cover; margin-bottom: 15px; border-radius: 8px;">
                <img src="https://mueblesdeoficina1.com/wp-content/uploads/2024/07/el-mobiliario-de-oficina-ideal-para-coworking.jpg" alt="Oficina moderna" style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px;">
            </div>
        </div>

        <div class="row" style="margin-top: 60px; margin-bottom: 60px;">
            <div class="col s12 m6">
                <img src="https://gesab.com/wp-content/uploads/2023/08/Meeting-room-Guide-GESAB-10.webp" alt="Sala de reuniones moderna" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px;">
            </div>

            <div class="col s12 m6">
                <div class="mision">
                    <h3>Nuestra Misión</h3>
                    <p>Proporcionar soluciones tecnológicas innovadoras y escalables que impulsen el éxito de nuestros clientes.</p>
                </div>

                <div class="vision">
                    <h3>Nuestra Visión</h3>
                    <p>Ser líderes en el diseño y desarrollo de software, reconocidos por nuestra creatividad, calidad y compromiso con la satisfacción del cliente.</p>
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/navbar-scroll.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);
            M.AutoInit();
        });
    </script>

</body>
</html>
