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
    echo "<p>Faltan campos obligatorios. Regresa al formulario e inténtalo de nuevo.</p>";
    echo '<p><a href="solicitud.php">Volver al formulario</a></p>';
    exit;
}

// Convertir servicios seleccionados en una cadena
$servicios = implode(", ", $servicios_array);

// Preparar consulta
$sql = "INSERT INTO solicitudes (nombre, telefono, correo, tipo_vivienda, servicios, horario_preferido, descripcion)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $sql);
if (!$stmt) {
    die("Error al preparar la consulta: " . mysqli_error($conexion));
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

if ($ejecutado) {
    echo "<h1>Solicitud registrada</h1>";
    echo "<p>Gracias, <strong>" . htmlspecialchars($nombre) . "</strong>. Tu solicitud ha sido registrada correctamente.</p>";
    echo '<p><a href="solicitud.php">Capturar otra solicitud</a></p>';
    echo '<p><a href="reporte.php">Ver reporte de solicitudes</a></p>';
} else {
    echo "<p>Error al registrar la solicitud: " . mysqli_stmt_error($stmt) . "</p>";
    echo '<p><a href="solicitud.php">Volver al formulario</a></p>';
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
