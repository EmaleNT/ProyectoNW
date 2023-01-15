<?php
$db_host="localhost";
$db_nombre="eq10mascotas";
$db_usuario="root";
$db_contrasena="admin123";

try {
    $conexion=new PDO("mysql:host=$db_host;dbname=$db_nombre;",$db_usuario,$db_contrasena);
} catch (Exception $e) {
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}




//READ
//$sql="SELECT * FROM producto";
//$query=$conexion->query($sql);


/*
foreach($query as $productos){
    echo $productos['NOMBRE'].','; 
    echo $productos['PRECIO'].',';
    echo $productos['CANTIDAD'];
    echo 
    echo '<br>'; 
}*/


/*
//Read 1 valor
$sql="SELECT MAX(ID) FROM orden;";
$query=$conexion->query($sql);
echo $query->fetchColumn();
*/


//$sql="SELECT ID FROM producto WHERE nombre LIKE '%".$productoCarrito."%'";
/*
$valor=10;
$valor2=6;
$valor3=6;
 $sql="INSERT INTO lista_productos (orden_id, producto_id, cantidad) VALUES (".$valor.",".$valor2.",".$valor3.");";        
$query=$conexion->query($sql);
        echo $query->fetchColumn();
*/
/*
UPDATE,INSTERT,DELET
try{

    $sql="UPDATE producto SET CANTIDAD='10' WHERE ID=1 ";
    // Iniciar una transacción, desactivando 'autocommit' 
    $conexion->beginTransaction();
    // Cambiar el esquema de la base de datos 
    $conexion->exec($sql);
    // Consignar los cambios 
    $conexion->commit();
    echo "Se realizo con exito";    
}
catch(Exception $e){
    $conexion->rollBack();
    echo "Fallo".$e->getMessage();
}
*/

/*
$sql="SELECT * FROM producto";
$query=$conexion->query($sql); */


/* 
foreach($query as $productos){
    echo $productos['NOMBRE'].','; 
    echo $productos['PRECIO'].',';
    echo $productos['ID'];
    echo "<img src=".$productos['']." alt='producto'>";
    echo '<br>'; 
}*/




/*
//Read Imagenes con where
$valor="Hasbro Barril de Monos Rojos para Perro";
$sql="SELECT * FROM producto WHERE NOMBRE LIKE '%".$valor."%'";
$query = $conexion->query($sql);

$query->execute();
$stmt = $query->fetchAll();


foreach($stmt as $productos){
    $img = base64_encode($productos['IMAGEN']);
    echo '<img src="data:image/jpg;base64,'.$img.'">';
    }
*/  
?>