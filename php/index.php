<!-- index.php -->
<form action="login.php" method="post">
    <label for='nombre'>Nombre:</label>
    
    
    <input type="text" name="nombre" id="nombre" value="<?php if(isset($_COOKIE['nombre'])) echo $_COOKIE['nombre']; ?>"><br>
    ¿Recordar? <input type="checkbox" name="recordar"><br>
    <input type="submit" value="Iniciar sesión">
</form>
