<?php
require 'conexionDB.php';
require 'funcionesSessions.php';

creaSession();

/*
echo $_POST['calleP'];
echo $_POST['coloniaP'];
echo $_POST['numeroP'];
echo $_POST['codigopostalP'];
echo $_POST['ciudadP'];
echo $_POST['envioestandar'];
echo $_POST['nombreT'];
echo $_POST['numeroT'];
echo $_POST['tipotarjetaP'];
echo $_POST['cvcT'];
echo $_POST['aniotarjeta'];
echo $_POST['mestarjeta'];
estadoP
*/


//INSERT INTO `lista_productos` (`orden_id`, `producto_id`, `cantidad`) VALUES ('9', '3', '10');



try{
    //Insert de datos de usuario
    $sql="INSERT INTO orden (CALLE,COLONIA,NUMERO,CP,CIUDAD,ESTADO,TIPO_ENVIO,NOMBER_TITULAR,NUMERO_TARJETA,TIPO_TARJETA,CVV,ANO,MES) VALUES ('".$_POST['calleP']."','".$_POST['coloniaP']."',".$_POST['numeroP'].",".$_POST['codigopostalP'].",'".$_POST['ciudadP']."','".$_POST['estadoP']."',".$_POST['envioestandar'].",'".$_POST['nombreT']."',".$_POST['numeroT'].",'".$_POST['tipotarjetaP']."',".$_POST['cvcT'].",".$_POST['aniotarjeta'].",".$_POST['mestarjeta'].");";
    // Iniciar una transacción, desactivando 'autocommit' 
    $conexion->beginTransaction();
    // Cambiar el esquema de la base de datos 
    $conexion->exec($sql);
    
    
    //Regresa el id del insert de arriba
    $sql="SELECT MAX(ID) FROM orden;";
    $orden=$conexion->query($sql);
    $idOrden=$orden->fetchColumn();
    //echo $idOrden;

    
    foreach($_SESSION['carrito'] as $productoCarrito=>$value){
        $sql="SELECT ID FROM producto WHERE nombre LIKE '%".$productoCarrito."%';";
        $query=$conexion->query($sql);
        $idProducto=$query->fetchColumn();
        
        //echo "<br>";
        //echo $idProducto;
        //echo "<br>";
        //echo $value;
        //echo "<br>";

        $sql="INSERT INTO lista_productos (orden_id, producto_id, cantidad) VALUES (".$idOrden.",".$idProducto.",".$value.");";        
        $query=$conexion->query($sql);
       

    }


    // Consignar los cambios 
    $conexion->commit();
    //echo "Se realizo con exito";  
    destruirSession();

    require 'cerrarConexion.php';
    

    //Muestra una alaerta de exito y redirige a index.php
    echo "<script>alert('Compra exitosamente'); window.location.href = 'index.php';</script>";
    
    
}
catch(Exception $e){
    $conexion->rollBack();
    //echo "Fallo".$e->getMessage();

    //Muestra una alaerta de error y redirige a carrito.php
    echo "<script>alert('Error al comprar'); window.location.href = 'carrito.php';</script>";
    
}


?>

