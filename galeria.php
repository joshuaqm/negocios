<?php
// Si necesitas conexión a la BD para la galería, descomenta esto:
// include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="imgs/favicon.ico">
    <title>Mantenimiento Residencial - Inicio</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="JS/app.js" defer></script>
</head>
<body>

    <header class="site-header">
        <div class="logo">
            <img src="imgs/logo.jpg" alt="Logo Mantenimiento Residencial">
            <div class="logo-texto">
                <h1>Mantenimiento Residencial</h1>
                <p>Cuidado integral para tu hogar</p>
            </div>
        </div>

        <!-- Cuadro con nombres del equipo -->
        <aside class="equipo">
            <h2>Equipo 5</h2>
            <ul>
                <li>Chilpa Navarro Alan Salvador</li>
                <li>Muñoz Norberto David Julian</li>
                <li>Quintero Montero Francisco Joshua</li>
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
        <h2>Galería de trabajos</h2>
        <p>
            En esta sección presentamos una selección de los trabajos de mantenimiento residencial que hemos realizado, incluyendo reparaciones eléctricas, servicios de plomería y ajustes generales en viviendas. Cada proyecto refleja nuestro enfoque en la prevención de fallas, la atención oportuna a los residentes y la conservación en óptimas condiciones de los espacios habitacionales.
        </p>

    </section>

    <section class="servicios">
        <h2>Trabajos realizados</h2>

            <div class="stats-galeria">
    <div class="stat">
        <span class="stat-num" data-final="3">0</span>
        <span class="stat-label">Proyectos realizados</span>
    </div>
    <div class="stat">
        <span class="stat-num" data-final="5">0</span>
        <span class="stat-label">Servicios eléctricos</span>
    </div>
    <div class="stat">
        <span class="stat-num" data-final="4">0</span>
        <span class="stat-label">Servicios de plomería</span>
    </div>
</div>

        <div class="servicios-grid">
            <!-- Tarjeta 1 -->
<article class="servicio-card"
         data-titulo="Proyecto 1"
         data-detalle="Mantenimiento preventivo de la fachada y ventanas de una vivienda residencial. Incluyó lijado, resanado de marcos y aplicación de sellador y pintura para mejorar la protección y la apariencia del inmueble."
         data-img="imgs/galeria1.png">
    <img src="imgs/galeria1.png" alt="Proyecto 1">
    <h3>Proyecto 1</h3>
    <p> Mantenimiento preventivo de la fachada y ventanas de una vivienda residencial. 
                    Incluyó lijado y resanado de marcos, aplicación de sellador para evitar filtraciones 
                    y pintura nueva para mejorar la protección y la apariencia del inmueble. </p>
    <button class="btn-detalle">Ver detalle</button>
</article>

            <!-- Tarjeta 2 -->
<article class="servicio-card"
         data-titulo="Proyecto 2"
         data-detalle="Instalación y ajuste de luminarias exteriores tipo LED en área residencial. Se reforzó el cableado, se verificó el funcionamiento de interruptores y fotoceldas para brindar mayor seguridad e iluminación nocturna."
         data-img="imgs/galeria2.png">
    <img src="imgs/galeria2.png" alt="Proyecto 2">
    <h3>Proyecto 2</h3>
    <p> Instalación y ajuste de luminarias exteriores tipo LED en área residencial. 
                    Se reforzó el cableado, se colocaron focos de bajo consumo y se verificó el correcto 
                    funcionamiento de interruptores y fotoceldas para brindar mayor seguridad e iluminación nocturna.</p>
    <button class="btn-detalle">Ver detalle</button>
</article>

            <!-- Tarjeta 3 -->
<article class="servicio-card"
         data-titulo="Proyecto 3"
         data-detalle="Servicio de plomería en cocina para corregir fugas en el sistema de desagüe. Se reemplazaron tuberías y conexiones bajo el fregadero, se sellaron uniones y se comprobó el flujo adecuado del agua."
         data-img="imgs/galeria3.png">
    <img src="imgs/galeria3.png" alt="Proyecto 3">
    <h3>Proyecto 3</h3>
    <p> Servicio de plomería en cocina para corregir fugas en el sistema de desagüe. 
                    Se reemplazaron tuberías y conexiones bajo el fregadero, se sellaron uniones y se comprobó 
                    el flujo adecuado del agua, evitando filtraciones y malos olores en la zona.</p>
    <button class="btn-detalle">Ver detalle</button>
</article>

            <!-- Puedes seguir agregando más tarjetas de trabajos aquí -->
        </div>
    </section>

<div id="modal-detalle" class="modal">
    <div class="modal-contenido">
        <span class="modal-cerrar">&times;</span>
        <img id="modal-imagen" src="" alt="" />
        <h3 id="modal-titulo"></h3>
        <p id="modal-texto"></p>
    </div>
</div>

</main>

<footer class="site-footer">
    <p>&copy; <?php echo date("Y"); ?> Mi Sitio de Servicios. Todos los derechos reservados.</p>
</footer>

</body>
</html>
