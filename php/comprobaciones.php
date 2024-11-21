<?php
session_start();
if (!isset($_POST['nombre']) && !isset($_SESSION['nombre'])){
    header('location: index.php');
} 
?>
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">