<?php
require 'funcionesSessions.php';

creaSession();


$nombreProducto=$_POST['nombreProducto'];
eliminar($nombreProducto);

//print_r($_SESSION['carrito']);

header("Location: carrito.php");
exit;

?>
