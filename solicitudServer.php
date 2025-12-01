<?php
// solicitudServer.php
require_once "conexion.php";

// Recuperar datos del formulario
$nombre          = isset($_POST['nombre']) ? trim($_POST['nombre']) : "";
$telefono        = isset($_POST['telefono']) ? trim($_POST['telefono']) : "";
$correo          = isset($_POST['correo']) ? trim($_POST['correo']) : "";
$tipo_vivienda   = isset($_POST['tipo_vivienda']) ? trim($_POST['tipo_vivienda']) : "";
$servicios_array = isset($_POST['servicios']) ? $_POST['servicios'] : [];
$horario         = isset($_POST['horario_preferido']) ? trim($_POST['horario_preferido']) : "";
$descripcion     = isset($_POST['descripcion']) ? trim($_POST['descripcion']) : "";

// Validación mínima
if ($nombre === "" || $tipo_vivienda === "" || empty($servicios_array)) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error en Solicitud - Servicios Profesionales</title>
        <link rel="stylesheet" href="CSS/styles.css">
    </head>
    <body>
        <main>
            <div class="error-solicitud">
                <h1>Error en la Solicitud</h1>
                <p>Faltan campos obligatorios. Por favor, regresa al formulario e inténtalo de nuevo.</p>
                <a href="solicitud.php">Volver al formulario</a>
            </div>
        </main>
    </body>
    </html>
    <?php
    exit;
}

// Convertir servicios seleccionados en una cadena
$servicios = implode(", ", $servicios_array);

// Preparar consulta
$sql = "INSERT INTO solicitudes (nombre, telefono, correo, tipo_vivienda, servicios, horario_preferido, descripcion)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $sql);
if (!$stmt) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error del Sistema - Servicios Profesionales</title>
        <link rel="stylesheet" href="CSS/styles.css">
    </head>
    <body>
        <main>
            <div class="error-solicitud">
                <h1>Error del Sistema</h1>
                <p>Error al preparar la consulta: <?php echo mysqli_error($conexion); ?></p>
                <a href="solicitud.php">Volver al formulario</a>
            </div>
        </main>
    </body>
    </html>
    <?php
    exit;
}

mysqli_stmt_bind_param($stmt, "sssssss",
    $nombre,
    $telefono,
    $correo,
    $tipo_vivienda,
    $servicios,
    $horario,
    $descripcion
);

$ejecutado = mysqli_stmt_execute($stmt);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="imgs/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $ejecutado ? 'Solicitud Registrada' : 'Error en Solicitud'; ?> - Servicios Profesionales</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <main>
        <?php if ($ejecutado): ?>
            <div class="confirmacion-solicitud">
                <h1>Solicitud Registrada</h1>
                <p>Gracias, <strong><?php echo htmlspecialchars($nombre); ?></strong>. Tu solicitud ha sido registrada correctamente.</p>
                <div class="confirmacion-links">
                    <a href="solicitud.php">Capturar otra solicitud</a>
                </div>
            </div>
        <?php else: ?>
            <div class="error-solicitud">
                <h1>Error en la Solicitud</h1>
                <p>Error al registrar la solicitud: <?php echo mysqli_stmt_error($stmt); ?></p>
                <a href="solicitud.php">Volver al formulario</a>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>

<?php
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>