
<?php
require 'funcionesSessions.php';

creaSession();


$nombreProducto=$_POST['nombreProducto'];
anadir($nombreProducto);

//print_r($_SESSION['carrito']);

header("Location: listaProductos.php");
exit;

?>
