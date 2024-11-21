<!-- logout.php -->
<?php
require_once("comprobaciones.php");

session_destroy();  // Destruye la sesión
header("Location: index.php");  // Redirige al formulario de inicio
?>
