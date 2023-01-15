
<?php
require 'funcionesSessions.php';

creaSession();


$nombreProducto=$_POST['nombreProducto'];
anadir($nombreProducto);

//print_r($_SESSION['carrito']);
echo "<script>alert('Añadido al carrito'); window.location.href = 'listaProductos.php';</script>";

//header("Location: listaProductos.php");
//exit;

?>
