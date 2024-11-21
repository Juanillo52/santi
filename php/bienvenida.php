<!-- bienvenida.php (modificado) -->
<?php
require_once("comprobaciones.php");

if (isset($_SESSION['nombre'])) {
    echo "Bienvenido nuevamente, " . $_SESSION['nombre'] . "!<br>";
    echo '<a href="logout.php">Cerrar sesión</a>';
} else {
    echo "No has iniciado sesión. Por favor, ingresa tu nombre <a href='index.php'>aquí</a>.";
}
?>
