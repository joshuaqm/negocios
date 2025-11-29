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
            <h1>Mantenimiento Residencial</h1>
            <p>Cuidado integral para tu hogar</p>
        </div>

        <!-- Cuadro con nombres del equipo (requerido por el profe) -->
        <aside class="equipo">
            <h2>Equipo Equipo 5</h2>
            <ul>
                <li>Chilpa Navarro Alan Salvador</li>
                <li>Muñoz Norberto David Julián</li>
                <li>Quintero Montero Francisco Joshua</li>
                <!-- Agrega o quita según tu equipo -->
            </ul>
        </aside>
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
            <h2>Servicios de mantenimiento para casas y departamentos</h2>
            <p id="intro-text">
                Ofrecemos soluciones en plomería, electricidad, pintura, jardinería y limpieza
                para mantener tu hogar en óptimas condiciones, con personal calificado y atención
                rápida.
            </p>
            <button type="button" onclick="resaltarParrafo('intro-text')">
                Resaltar descripción
            </button>
        </section>

        <section id="servicios" class="servicios">
            <h2>Principales servicios</h2>
            <div class="servicios-grid">
                <article class="servicio-card" onmouseover="agrandarImagen(this)" onmouseout="restaurarImagen(this)">
                    <img src="imgs/plomeria.jpg" alt="Plomería (imagen de ejemplo)">
                    <h3>Plomería</h3>
                    <p>Reparación de fugas, cambio de llaves, drenaje y mantenimiento general.</p>
                </article>

                <article class="servicio-card" onmouseover="agrandarImagen(this)" onmouseout="restaurarImagen(this)">
                    <img src="imgs/electricidad.jpg" alt="Electricidad (imagen de ejemplo)">
                    <h3>Electricidad</h3>
                    <p>Instalación de contactos, revisión de cortos, cambio de apagadores y lámparas.</p>
                </article>

                <article class="servicio-card" onmouseover="agrandarImagen(this)" onmouseout="restaurarImagen(this)">
                    <img src="imgs/pintura.jpg" alt="Pintura (imagen de ejemplo)">
                    <h3>Pintura</h3>
                    <p>Pintura interior y exterior, retoques y mantenimiento de acabados.</p>
                </article>
            </div>
        </section>

        <section class="multimedia">
            <h2>Conoce nuestro trabajo</h2>
            <!-- Video o audio corto (ejemplo con audio local) -->
            <audio controls>
                <source src="media/presentacion.mp3" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
            <!-- Podrías usar un video corto de 10s en lugar de audio -->
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; <?php echo date("Y"); ?> Mantenimiento Residencial. Todos los derechos reservados.</p>
        <p>
            Sitio de ejemplo para proyecto académico.  
            <a href="https://www.gob.mx/profeco" target="_blank">PROFECO</a> (enlace externo).
        </p>
    </footer>
</body>
</html>}