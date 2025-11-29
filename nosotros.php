<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mantenimiento Residencial - Inicio</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/app.js" defer></script>
</head>
<body>

<header class="site-header">
    <div class="logo">
        <h1>Mi Sitio de Servicios</h1>
        <p>Gestión de solicitudes y reportes</p>
    </div>
    <div class="equipo">
        <h2>Equipo 5</h2>
        <ul>
            <li>Chilpa Navarro Alan Salvador</li>
            <li>Muñoz Norberto David Julián</li>
            <li>Quintero Montero Francisco Joshua</li>
        </ul>
    </div>
</header>

<nav class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="solicitud.php">Solicitar servicio</a></li>
            <li><a href="reporte.php">Reporte de solicitudes</a></li>
            <li><a href="galeria.php">Galería</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>

        </ul>
</nav>

<main>
    <section class="hero">
        <h2>Nosotros</h2>
        <p>
            Somos un equipo especializado en mantenimiento residencial integral, enfocado en garantizar la seguridad, funcionalidad y buen estado de las viviendas. Contamos con un responsable de instalaciones eléctricas y sistemas de seguridad, encargado de la revisión de luminarias, contactos, tableros y apoyo en la instalación de cámaras, sensores y portones eléctricos conforme a la normativa vigente; un técnico en mantenimiento general que realiza inspecciones preventivas, corrige filtraciones, humedades y desperfectos en puertas, ventanas y acabados, asegurando la conservación de los espacios; y un coordinador de servicios que organiza las órdenes de trabajo, programa mantenimientos preventivos, administra los reportes recibidos a través de la plataforma y da seguimiento a cada solicitud, manteniendo una comunicación clara y oportuna con los residentes. En conjunto, nuestro objetivo es ofrecer un servicio profesional, eficiente y confiable que brinde tranquilidad a las familias que habitan el conjunto residencial.
        </p>


    </section>

    <section class="servicios">
        <h2>Integrantes del equipo</h2>

        <div class="servicios-grid">
            <!-- Integrante 1 -->
            <article class="servicio-card">
                <img src="img/Chilpa.jpeg" alt="Integrante 1">
                <h3>Alan Chilpa</h3>
                <p>
                    Responsable de la revisión y mantenimiento de las instalaciones eléctricas de las viviendas, luminarias interiores y exteriores, contactos, apagadores y tableros. También apoya en la instalación de equipos de seguridad como cámaras, sensores y portones eléctricos. Su prioridad es garantizar que todas las instalaciones cumplan con las normas, reduzcan riesgos de fallas y brinden tranquilidad a las familias que habitan los espacios.
                </p>
            </article>

            <!-- Integrante 2 -->
            <article class="servicio-card">
                <img src="Img/David.jpeg" alt="Integrante 2">
                <h3>David Muñoz</h3>
                <p>
                    Técnico en mantenimiento residencial con experiencia en reparación y conservación de casas y departamentos. Se encarga de realizar inspecciones preventivas, arreglar filtraciones, humedades, puertas, ventanas y acabados, así como dar seguimiento a reportes de los residentes. Destaca por su capacidad para diagnosticar problemas rápidamente y proponer soluciones prácticas, cuidando siempre la seguridad, la limpieza y el buen estado de las instalaciones.
                </p>
            </article>

            <!-- Integrante 3 -->
            <article class="servicio-card">
                <img src="Img/Yoshi.jpeg" alt="Integrante 3">
                <h3>Joshua Quintero</h3>
                <p>
                    Encargado de coordinar las órdenes de trabajo, calendarizar mantenimientos preventivos y dar seguimiento a las solicitudes de los residentes. Administra los reportes que llegan por la plataforma, asigna tareas al equipo técnico y verifica que los servicios se concluyan en tiempo y forma. Se caracteriza por su trato amable, comunicación clara y enfoque en ofrecer una atención rápida y organizada para mejorar la experiencia de quienes viven en el conjunto residencial.
                </p>
            </article>
        </div>
    </section>

</main>

<footer class="site-footer">
    <p>&copy; <?php echo date("Y"); ?> Mi Sitio de Servicios. Todos los derechos reservados.</p>
</footer>

</body>
</html>
