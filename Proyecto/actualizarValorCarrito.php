<?php
require 'funcionesSessions.php';

creaSession();

$nombreProducto=$_POST['nombreProducto'];
$valornuevo=$_POST['nuevoValor'];


actualizarValorCarrito($nombreProducto,$valornuevo);

//print_r($_SESSION['carrito']);
header("Location: carrito.php");
exit;


?>