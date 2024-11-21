<!-- login.php -->
<?php
//session_start();  // Inicia la sesión
require_once("comprobaciones.php");

if (isset($_POST['nombre'])) {
    $_SESSION['nombre'] = $_POST['nombre'];
    echo "Hola, " . $_POST['nombre'] . "! Tu sesión ha sido iniciada.<br>";
    echo '<a href="bienvenida.php">Ir a la página de bienvenida</a>';
} else if (isset($_SESSION['nombre'])){
    echo "Hola, " . $_SESSION['nombre'] . "! Tu sesión ya iniciada.<br>";
    echo '<a href="bienvenida.php">Ir a la página de bienvenida</a>';
} else {
    echo "No has iniciado sesión. Por favor, ingresa tu nombre <a href='index.php'>aquí</a>.";
}

if(isset($_POST["recordar"])) {
    setcookie('nombre', $_SESSION['nombre'],time()+30);
}

?>
<button id="parriba" onclick="parriba()">Parriba</button>

<!-- Contenido de ejemplo para hacer scroll -->
<div style="height: 5000000px;">
<br><p>Desplázate hacia abajo y usa el botón para volver arriba.</p>
</div>

