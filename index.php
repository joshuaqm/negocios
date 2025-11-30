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
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#testimonios">Testimonios</a></li>
            <li><a href="solicitud.php">Solicitar servicio</a></li>
            <li><a href="reporte.php">Reporte de solicitudes</a></li>
            <li><a href="galeria.php">Galería</a></li>
            <li><a href="nosotros.php">Equipo</a></li>
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
            <div class="intro-servicios">
                <p>
                    En Mantenimiento Residencial contamos con más de 10 años de experiencia brindando
                    servicios profesionales de mantenimiento integral. Nuestro equipo de técnicos
                    certificados está disponible para atender cualquier necesidad de tu hogar.
                </p>
                <p>
                    Trabajamos con las mejores marcas y materiales del mercado, garantizando calidad
                    y durabilidad en cada trabajo que realizamos. Tu satisfacción es nuestra prioridad.
                </p>
            </div>

            <div class="servicios-grid">
                <article class="servicio-card" onmouseover="agrandarImagen(this)" onmouseout="restaurarImagen(this)">
                    <img src="imgs/plomeria.jpg" alt="Plomería (imagen de ejemplo)">
                    <h3>Plomería</h3>
                    <p>Reparación de fugas, cambio de llaves, drenaje y mantenimiento general.</p>
                    <ul class="detalles-servicio">
                        <li>Instalación y reparación de tuberías</li>
                        <li>Destapado de drenajes</li>
                        <li>Instalación de calentadores</li>
                        <li>Reparación de cisternas y tinacos</li>
                    </ul>
                </article>

                <article class="servicio-card" onmouseover="agrandarImagen(this)" onmouseout="restaurarImagen(this)">
                    <img src="imgs/electricidad.jpg" alt="Electricidad (imagen de ejemplo)">
                    <h3>Electricidad</h3>
                    <p>Instalación de contactos, revisión de cortos, cambio de apagadores y lámparas.</p>
                    <ul class="detalles-servicio">
                        <li>Instalación eléctrica completa</li>
                        <li>Mantenimiento preventivo</li>
                        <li>Instalación de luminarias</li>
                        <li>Reparación de tableros eléctricos</li>
                    </ul>
                </article>

                <article class="servicio-card" onmouseover="agrandarImagen(this)" onmouseout="restaurarImagen(this)">
                    <img src="imgs/pintura.jpg" alt="Pintura (imagen de ejemplo)">
                    <h3>Pintura</h3>
                    <p>Pintura interior y exterior, retoques y mantenimiento de acabados.</p>
                    <ul class="detalles-servicio">
                        <li>Pintura de interiores y exteriores</li>
                        <li>Aplicación de texturas decorativas</li>
                        <li>Impermeabilización</li>
                        <li>Restauración de fachadas</li>
                    </ul>
                </article>

                <article class="servicio-card" onmouseover="agrandarImagen(this)" onmouseout="restaurarImagen(this)">
                    <img src="imgs/jardineria.jpg" alt="Jardinería (imagen de ejemplo)">
                    <h3>Jardinería</h3>
                    <p>Mantenimiento de jardines, poda de árboles y diseño de áreas verdes.</p>
                    <ul class="detalles-servicio">
                        <li>Poda y mantenimiento de plantas</li>
                        <li>Diseño de jardines</li>
                        <li>Sistemas de riego</li>
                        <li>Control de plagas naturales</li>
                    </ul>
                </article>

                <article class="servicio-card" onmouseover="agrandarImagen(this)" onmouseout="restaurarImagen(this)">
                    <img src="imgs/limpieza.jpg" alt="Limpieza (imagen de ejemplo)">
                    <h3>Limpieza</h3>
                    <p>Limpieza profunda, mantenimiento regular y servicios especializados.</p>
                    <ul class="detalles-servicio">
                        <li>Limpieza residencial completa</li>
                        <li>Lavado de alfombras y tapicería</li>
                        <li>Limpieza de vidrios y ventanas</li>
                        <li>Servicios post-construcción</li>
                    </ul>
                </article>

                <article class="servicio-card" onmouseover="agrandarImagen(this)" onmouseout="restaurarImagen(this)">
                    <img src="imgs/carpinteria.jpg" alt="Carpintería (imagen de ejemplo)">
                    <h3>Carpintería</h3>
                    <p>Reparación y fabricación de muebles, puertas y estructuras de madera.</p>
                    <ul class="detalles-servicio">
                        <li>Fabricación de muebles a medida</li>
                        <li>Reparación de puertas y ventanas</li>
                        <li>Instalación de closets</li>
                        <li>Restauración de muebles</li>
                    </ul>
                </article>
            </div>
        </section>

        <section id="nosotros" class="nosotros">
            <h2>¿Por qué elegirnos?</h2>
            <div class="ventajas-container">
                <div class="ventaja">
                    <h3>Experiencia Comprobada</h3>
                    <p>
                        Más de 10 años brindando servicios de mantenimiento residencial en la Ciudad de México
                        y área metropolitana. Contamos con un equipo de profesionales capacitados que garantizan
                        trabajos de la más alta calidad.
                    </p>
                </div>
                <div class="ventaja">
                    <h3>Atención Rápida</h3>
                    <p>
                        Entendemos que los problemas en el hogar no esperan. Por eso ofrecemos servicio de
                        emergencia las 24 horas, los 7 días de la semana. Nuestro tiempo de respuesta promedio
                        es de menos de 2 horas en situaciones urgentes.
                    </p>
                </div>
                <div class="ventaja">
                    <h3>Garantía Total</h3>
                    <p>
                        Todos nuestros servicios incluyen garantía por escrito. Si no quedas satisfecho con
                        el trabajo realizado, lo corregimos sin costo adicional. Tu tranquilidad es nuestra
                        mejor publicidad.
                    </p>
                </div>
                <div class="ventaja">
                    <h3>Precios Justos</h3>
                    <p>
                        Ofrecemos presupuestos transparentes sin costos ocultos. Nuestros precios son
                        competitivos y justos, con opciones de pago flexibles para adaptarnos a tu presupuesto.
                    </p>
                </div>
            </div>
        </section>

        <section id="testimonios" class="testimonios">
            <h2>Lo que dicen nuestros clientes</h2>
            <div class="testimonios-grid">
                <div class="testimonio">
                    <p class="testimonio-texto">
                        "Excelente servicio de plomería. Llegaron rápido y resolvieron una fuga complicada
                        en menos de una hora. Muy profesionales y el precio fue muy razonable."
                    </p>
                    <p class="testimonio-autor">- María González, Polanco</p>
                </div>
                <div class="testimonio">
                    <p class="testimonio-texto">
                        "Contraté el servicio de pintura para toda mi casa y quedé muy satisfecho. El trabajo
                        fue impecable y terminaron antes de lo previsto. Los recomiendo ampliamente."
                    </p>
                    <p class="testimonio-autor">- Carlos Rodríguez, Coyoacán</p>
                </div>
                <div class="testimonio">
                    <p class="testimonio-texto">
                        "El servicio de jardinería transformó completamente mi patio. Son creativos, puntuales
                        y el mantenimiento mensual mantiene todo perfecto. Vale cada peso."
                    </p>
                    <p class="testimonio-autor">- Ana Martínez, San Ángel</p>
                </div>
            </div>
        </section>

        <section class="multimedia">
            <h2>Conoce nuestro trabajo</h2>
            <p class="multimedia-intro">
                En este video podrás conocer algunos de nuestros proyectos y ver
                la calidad de nuestro trabajo. Nuestro compromiso es superar tus expectativas en
                cada servicio que realizamos.
            </p>
            <div class="video-container">
                <video class="video-presentacion" controls>
                    <source src="media/presentacion.mp4" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
            </div>
            <p class="multimedia-nota">
                ¿Tienes un proyecto en mente? <a href="solicitud.php">Solicita tu cotización sin compromiso</a>
            </p>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; <?php echo date('Y'); ?> Mantenimiento Residencial. Todos los derechos reservados.</p>
        <p>
            Sitio de ejemplo para proyecto académico.
            <a href="https://www.gob.mx/profeco" target="_blank">PROFECO</a>.
        </p>
    </footer>
</body>

</html>
