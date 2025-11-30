<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitar servicio - Mantenimiento Residencial</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/app.js" defer></script>
</head>
<body>
    <header class="site-header">
        <h1>Solicitar servicio de mantenimiento</h1>
    </header>

    <nav class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="solicitud.php">Solicitar servicio</a></li>
            <li><a href="reporte.php">Reporte de solicitudes</a></li>
            <li><a href="galeria.php">Galería</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
        </ul>
    </nav>

    <main>
        <section class="form-section">
            <h2>Captura tus datos</h2>
            <form action="solicitudServer.php" method="post">
                <fieldset>
                    <legend>Datos del cliente</legend>

                    <label for="nombre">Nombre completo*:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono">

                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo">
                </fieldset>

                <fieldset>
                    <legend>Información del servicio</legend>

                    <span>Tipo de vivienda*:</span>
                    <label>
                        <input type="radio" name="tipo_vivienda" value="Casa" required>
                        Casa
                    </label>
                    <label>
                        <input type="radio" name="tipo_vivienda" value="Departamento" required>
                        Departamento
                    </label>

                    <span>Servicios requeridos* (puedes elegir varios):</span>
                    <label>
                        <input type="checkbox" name="servicios[]" value="Plomería">
                        Plomería
                    </label>
                    <label>
                        <input type="checkbox" name="servicios[]" value="Electricidad">
                        Electricidad
                    </label>
                    <label>
                        <input type="checkbox" name="servicios[]" value="Pintura">
                        Pintura
                    </label>
                    <label>
                        <input type="checkbox" name="servicios[]" value="Jardinería">
                        Jardinería
                    </label>
                    <label>
                        <input type="checkbox" name="servicios[]" value="Limpieza">
                        Limpieza
                    </label>

                    <label for="horario_preferido">Horario preferido:</label>
                    <select id="horario_preferido" name="horario_preferido">
                        <option value="">Selecciona una opción</option>
                        <option value="Mañana (8:00-12:00)">Mañana (8:00-12:00)</option>
                        <option value="Tarde (12:00-17:00)">Tarde (12:00-17:00)</option>
                        <option value="Noche (17:00-20:00)">Noche (17:00-20:00)</option>
                    </select>

                    <label for="descripcion">Descripción del problema:</label>
                    <textarea id="descripcion" name="descripcion" rows="4"></textarea>
                </fieldset>

                <button type="submit">Enviar solicitud</button>
                <button type="reset">Limpiar formulario</button>
            </form>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; <?php echo date("Y"); ?> Mantenimiento Residencial.</p>
    </footer>
</body>
</html>
