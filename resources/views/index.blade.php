<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLAN</title>

    <!-- Framework Materialize -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <!-- Librería de íconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        nav.nav-wrapper {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: none;
        }

        nav .brand-logo img {
            height: 70px;
            margin-top: 0;
            vertical-align: middle;
            width: 95px;
        }
    </style>
</head>

<body class="index-page">

    <!-- Navbar -->
    <nav class="nav-wrapper">
        <div class="container">
            <a href="{{ url('/') }}" class="brand-logo">
                <img src="{{ asset('img/KLAN2.png') }}" alt="logo">
            </a>

            <a href="#" data-target="menu-responsive" class="sidenav-trigger right">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('about') }}">Sobre nosotros</a></li>
                <li><a href="{{ url('servicios') }}">Nuestros servicios</a></li>
                <li><a href="{{ url('planes') }}">Planes</a></li>
                <li><a href="{{ url('preguntas') }}">Preguntas</a></li>
                <li><a href="{{ url('contact') }}" style="color:darkviolet;">Únete</a></li>
            </ul>
        </div>
    </nav>

    <!-- Menú lateral -->
    <ul class="sidenav" id="menu-responsive">
        <li><a href="{{ url('about') }}">Sobre nosotros</a></li>
        <li><a href="{{ url('servicios') }}">Nuestros servicios</a></li>
        <li><a href="{{ url('planes') }}">Planes</a></li>
        <li><a href="{{ url('preguntas') }}">Preguntas</a></li>
        <li><a href="{{ url('contact') }}">Únete</a></li>
    </ul>

    <!-- Encabezado -->
    <header>
        <div class="titulo">
            <h1>ÚNETE<br>A<br>KLAN</h1>
        </div>
    </header>

    <!-- Sección Sobre Nosotros -->
    <section id="about-index">
        <div class="about-container">
            <div class="about-texto">
                <h2>Sobre Nosotros</h2>
                <h3>¿Quiénes somos?</h3>
                <p>En KLAN, creemos en el poder de la tecnología para impulsar el crecimiento y la eficiencia. Fundada en 2015, nuestra empresa se ha consolidado como un referente en el desarrollo de software personalizado, gracias a un equipo de profesionales apasionados por la tecnología y comprometidos con la excelencia.</p>
            </div>

            <div class="about-imagen">
                <img src="https://cdn-3.expansion.mx/dims4/default/0fa6a34/2147483647/strip/true/crop/1254x836+0+0/resize/1800x1200!/format/webp/quality/80/?url=https%3A%2F%2Fcdn-3.expansion.mx%2F6e%2F11%2F637687f94bbeb55715f3baf030cb%2Fregreso-oficina.jpg" alt="Profesional trabajando">
                <img src="https://mueblesdeoficina1.com/wp-content/uploads/2024/07/el-mobiliario-de-oficina-ideal-para-coworking.jpg" alt="Oficina moderna">
            </div>
        </div>
    </section>

    <!-- Sección Servicios -->
    <section id="servicios-index" class="container">
        <h2 class="center-align">Nuestros Servicios</h2>
        <p class="center-align">En KLAN, ofrecemos una amplia gama de servicios para cubrir todas tus necesidades tecnológicas:</p>

        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">01 - Desarrollo de Software a Medida</span>
                        <p>Creamos soluciones personalizadas que se adaptan a los procesos únicos de tu negocio.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">02 - Aplicaciones Móviles</span>
                        <p>Diseñamos y desarrollamos apps intuitivas para iOS y Android.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">03 - Aplicaciones Web</span>
                        <p>Construimos aplicaciones web modernas, seguras y escalables.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Planes -->
    <section id="planes" class="container">
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
                    <tr><td>Desarrollo Web</td><td>✓</td><td>✓</td><td>✓</td></tr>
                    <tr><td>Aplicación Móvil</td><td>-</td><td>✓</td><td>✓</td></tr>
                    <tr><td>Base de Datos</td><td>Básica</td><td>Avanzada</td><td>Completa</td></tr>
                    <tr><td>Soporte Técnico</td><td>Email</td><td>Email + Chat</td><td>24/7 Dedicado</td></tr>
                    <tr><td>Mantenimiento</td><td>3 meses</td><td>6 meses</td><td>12 meses</td></tr>
                    <tr><td>Integraciones</td><td>2 básicas</td><td>5 avanzadas</td><td>Ilimitadas</td></tr>
                    <tr><td>Tiempo de Entrega</td><td>4-6 semanas</td><td>6-8 semanas</td><td>8-12 semanas</td></tr>
                    <tr><td><b>Precio</b></td><td>$8,000 MXN</td><td>$18,000 MXN</td><td>$35,000 MXN</td></tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Sección Preguntas -->
    <section id="faq-index" class="container">
        <h2 class="center-align">Resolvemos tus dudas</h2>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">help_outline</i>¿Qué tipo de proyectos desarrollan?</div>
                <div class="collapsible-body blue lighten-1 white-text"><p>Desarrollo web, apps móviles, integración de sistemas y consultoría tecnológica.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">schedule</i>¿Cuánto tiempo tarda un proyecto?</div>
                <div class="collapsible-body blue lighten-1 white-text"><p>Depende del plan: 4 a 12 semanas.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">build</i>¿Ofrecen soporte?</div>
                <div class="collapsible-body blue lighten-1 white-text"><p>Sí, nuestros planes incluyen soporte entre 3 y 12 meses.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">contact_mail</i>¿Cómo puedo contratar?</div>
                <div class="collapsible-body blue lighten-1 white-text"><p>Llena el formulario en la sección <a href="{{ url('contact') }}">Contacto</a>.</p></div>
            </li>
        </ul>
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
                <p><img class="footer-icon" src="{{ asset('img/ubicacion-icon.png') }}" alt="location"> Celaya, Guanajuato</p>
                <p><img class="footer-icon" src="{{ asset('img/calendario-icon.png') }}" alt="date"> Lun - Vie: 9:00 AM - 6:00 PM</p>
            </div>

            <div class="footer-section">
                <h3>Enlaces Útiles</h3>
                <ul>
                    <li><a href="{{ url('about') }}">Sobre Nosotros</a></li>
                    <li><a href="{{ url('planes') }}">Nuestros Planes</a></li>
                    <li><a href="{{ url('contact') }}">Únete</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 KLAN. Todos los derechos reservados. | Desarrollado por Cesar Martinez & Jose Leon</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/navbar-scroll.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sidenav = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sidenav);
            var colapsables = document.querySelectorAll('.collapsible');
            M.Collapsible.init(colapsables);
        });
    </script>
</body>
</html>
