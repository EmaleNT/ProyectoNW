<?php
require 'conexionDB.php';
require 'funcionesSessions.php';

creaSession();



?>


<!DOCTYPE html>
<html lang="es-MXN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosHeaderNav.css">
    <link rel="stylesheet" href="css/carrito.css">
    <title>Mascotify</title>
</head>
<body>

    <header>
        <!--a href="index.php"><img src="img/logo.png" alt="Logo"></a>-->
    </header>
    
    <nav>
       
       
       <ul>
           <li><a href="index.php"><img src="img/logo.png" alt="Logo" width="45px"></a></li>
           <li><a href="listaProductos.php">Productos</a></li>
           <li><a href="nosotors.php">Acerca de nosotros</a></li>
           <li><a href="adopciones.php">Adopciones</a></li>
       </ul>
       
      

       <div class="iconoCarrito">
           <ul >
               <li><a href="carrito.php"><ion-icon size="large" name="cart-outline"></ion-icon></a></li>
           </ul>
       </div>
       
   </nav>

    <main>
        <h1>Carrito</h1>

        <table>
        <?php
        $total=0;
        foreach($_SESSION['carrito'] as $productoCarrito=>$value){
            $valor=$productoCarrito;
            $sql="SELECT * FROM producto WHERE nombre LIKE '%".$valor."%'";
            $query = $conexion->query($sql);
            $query->execute();
            $stmt = $query->fetchAll();
            
            foreach($stmt as $productos){
                

                echo "<tr>";
                echo "<td>";
                $img = base64_encode($productos['IMAGEN']);
                echo '<img src="data:image/jpg;base64,'.$img.'" width="180" height="180">';
                echo "</td>";
                echo "<td>Informacion producto <br/> </td>";
                echo "<td> Cantidad:  <input type='number' placeholder=".$value."></td>";
                echo "<td> Precio C/u".$productos['PRECIO']."</td>";
                echo "<td>";
                    echo "<form action='eliminarCarrito.php' method='post'>";
                    echo "<input type='hidden' name='nombreProducto' value='". $productos['NOMBRE']."'>";
                    echo "<button type='submit'>Eliminar</button>";
                    echo "</form>";
                echo "</td>";
                echo "</tr>";
                $total+=$productos['PRECIO'];
                }
            
        }

        ?>
           

    
        </table>

        <?php
        echo "Total: ".$total;
        ?>
    </main>

    

</body>
</html>