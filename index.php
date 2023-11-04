<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Denice Forero" />
        <meta name="description" content="página para hacer solicitude de citas" />
        <meta name="keywords" content="citas, medicina, control" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer" />
        <!-- cdn swetalert2 para la alerta de envío ticket-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet" href="css/style.css" />
        <link rel="icon" href="css/img/icon.png" />
        <title>Help Desk</title>
    </head>
    <body>
        <header class="header">

            <div class="menu container">
                <a href="#" class="logo"><img src="css/img/icon.png" alt="logo" /></a>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <img src="css/img/menu.png" class="menu-icono" alt="menu" />
                </label>

                <nav class="navbar">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#about">Nosotros</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#footer">Contacto</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header-content container">

                <div class="header-txt">
                    <h1>Centro de Soporte</h1>
                    <p>
                    Para agilizar las solicitudes de soporte y brindarle un mejor servicio, 
                    utilizamos un sistema de tickets de soporte. A cada solicitud de soporte
                    se le asigna un número único de ticket, que puede usar para rastrear el progreso y 
                    las respuestas en línea. Para su referencia, proporcionamos el historial de todas sus 
                    solicitudes de soporte. Se requiere una dirección de correo electrónico válida para enviar un ticket
                    </p>
                    <a href="#contacto" class="btn-1">Crear Ticket</a>
                </div>
                <div class="header-img">
                    <img src="css/img/header2.png" alt="encabezado" />
                </div>
            </div>

            <!--código para insertar ondulado del header-->
            <div class="wave">
                <div style="height: 150px; overflow: hidden;">
                    <svg
                        viewBox="0 0 500 150"
                        preserveAspectRatio="none"
                        style="height: 100%; width: 100%;">
                        <path
                            d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                            style="stroke: none; fill: #fff;"></path>

                    </svg>
                </div>
            </div>

        </header>

        <section id="about" class="about container">

            <div class="about-img">
                <img src="css/img/about2.png" alt="Nosotros" />
            </div>

            <div class="about-txt">
                <h2>Nosotros</h2>
                <p>
                    Somos una empresa colombiana que entrega información relevante
                    para cualquier compañia a través de la  <strong>ANALÍTICA DE DATOS</strong> 
                    de los sistemas de comunicaciones unificadas

                </p> <br>
                <p>
                    Conformada por un equipo de profesionales expertos en el desarrollo de soluciones
                    de software y de integración a nuevas tecnologías.
                    El propósito de nuestro producto Eagle Control es facilitar la toma de decisiones, reducir costos
                    asignar licenciamiento e insfraestructura y mejorar el bienestar laboral de las empresas.
                    

                </p>
            </div>
        </section>

        <main id="servicios" class="servicios">
            <h2>Servicios</h2>
            <div class="servicios-content container">
                <div class="servicio-1">
                <i class="fa-solid fa-file"></i>
                    <h3>Reportes</h3>
                </div>
                <div class="servicio-1">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                    <h3>Soporte</h3>
                </div>
                <div class="servicio-1">
                <i class="fa-solid fa-database"></i>
                    <h3>Big Data</h3>
                </div>
                <div class="servicio-1">
                <i class="fa-solid fa-chart-pie"></i>
                    <h3>Dashboard</h3>
                </div>
            </div>
        </main>

        <section id="contacto" class="formulario container">

            <form action="back/registro.php" method="post" autocomplete="off">

                <h2>Envía Tú Ticket</h2>

                <div class="input-group">
                    <div class="input-container">
                        <input
                            type="text"
                            name="nombre"
                            placeholder="Escribe tu Nombre y Apellido" />
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-container">
                        <input
                            type="tel"
                            name="telefono"
                            placeholder="Escribe tu número de celular" />
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email"
                            placeholder="Escribe tu correo" />
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="input-container">
                        <textarea
                            name="message"
                            placeholder="Detalles del requerimiento"></textarea>
                    </div>
                    <input
                        type="submit"
                        name="enviar"
                        class="btn"
                        value="Enviar" />
                </div>
            </form>
        </section>

        <footer id="footer" class="footer">
            <div class="footer-content container">
                <div class="link">
                    <a href="#" class="logo"><img src="css/img/iconBlanco.png"
                            alt="logo" /></a>
                </div>
            </div>
            <div class="link">
                <ul>
                    <li><i class="fa-brands fa-square-facebook"></i><a href="https://www.facebook.com/EaglewareSolutions"target="_blank">Eagleware</a></li>
                    <li>
                        <i class="fa-brands fa-square-instagram"></i><a href="https://instagram.com/eagleware.solutions?igshid=MzRlODBiNWFlZA=="target="_blank">@eagleware</a>
                    </li>
                    <li>
                        <i class="fa-brands fa-square-whatsapp"></i><a href="#">+57 3005247867</a>
                    </li>
                    <li><i class="fa-brands fa-linkedin"></i><a href="https://www.linkedin.com/company/eagleware-solutions/mycompany/"target="_blank">Eagleware
                            Solutions</a></li>
                </ul>
            </div>
        </footer>

        <?php

        include("./back/registro.php");

        ?>
    <!-- Scrip para la alerta de envío ticket-->
    <script>
      Swal.fire('Tú ticket se envió correctamente!')
    </script>
            
    </body>
</html>
