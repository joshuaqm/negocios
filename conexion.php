<?php
// conexion.php
// Archivo de conexión a MySQL para reutilizar en todo el sitio

$host = "localhost";
$usuario = "root";          // cámbialo si usas otro usuario
$password = "";             // pon el password que usaste en AppServ
$baseDatos = "Eq5Mantenimiento"; // cambia al nombre real de tu BD

$conexion = mysqli_connect($host, $usuario, $password, $baseDatos);

// Verifica conexión
if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

// Asegura UTF-8
mysqli_set_charset($conexion, "utf8");
?>
