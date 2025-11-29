<?php
require_once "conexion.php";

$sql = "SELECT id, nombre, telefono, correo, tipo_vivienda, servicios, horario_preferido, descripcion, fecha_registro
        FROM solicitudes
        ORDER BY fecha_registro DESC";

$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de solicitudes - Mantenimiento Residencial</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="site-header">
        <h1>Reporte de solicitudes de mantenimiento</h1>
    </header>

    <nav class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="solicitud.php">Solicitar servicio</a></li>
            <li><a href="reporte.php">Reporte de solicitudes</a></li>
        </ul>
    </nav>

    <main>
        <section class="reporte-section">
            <h2>Listado de solicitudes registradas</h2>
            <?php if ($resultado && mysqli_num_rows($resultado) > 0): ?>
                <table class="tabla-reporte">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Tipo vivienda</th>
                            <th>Servicios</th>
                            <th>Horario</th>
                            <th>Descripción</th>
                            <th>Fecha registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
                            <tr>
                                <td><?php echo $fila['id']; ?></td>
                                <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($fila['telefono']); ?></td>
                                <td><?php echo htmlspecialchars($fila['correo']); ?></td>
                                <td><?php echo htmlspecialchars($fila['tipo_vivienda']); ?></td>
                                <td><?php echo htmlspecialchars($fila['servicios']); ?></td>
                                <td><?php echo htmlspecialchars($fila['horario_preferido']); ?></td>
                                <td><?php echo nl2br(htmlspecialchars($fila['descripcion'])); ?></td>
                                <td><?php echo $fila['fecha_registro']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No hay solicitudes registradas por el momento.</p>
            <?php endif; ?>

            <?php mysqli_free_result($resultado); mysqli_close($conexion); ?>
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; <?php echo date("Y"); ?> Mantenimiento Residencial.</p>
    </footer>
</body>
</html>
