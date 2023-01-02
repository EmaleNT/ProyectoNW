<?php
require 'conexionDB.php';

$sql="SELECT * FROM producto";
$query=$conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es-MXN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosHeaderNav.css">
    <link rel="stylesheet" href="css/listaProductos.css">
    <title>Nombre Tienda</title>
</head>
<body>

<header>
        <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
    </header>
    
    <nav>
       
       <ul>
           <li><a href="index.php">Inicio</a></li>
           <li><a href="listaProductos.php">Comida</a></li>
           <li><a href="listaProductos.php">Juguetes</a></li>
           <li><a href="listaProductos.php">Salud</a></li>
           <li><a href="nosotors.php">Nosotros</a></li>
       </ul>
      

       <div class="iconoCarrito">
           <ul >
               <li><a href="carrito.php"><ion-icon size="large" name="cart-outline"></ion-icon></a></li>
           </ul>
       </div>
       
   </nav>

    <main>
        <div class="listaProductos">
        <?php foreach($query as $productos){
            echo "<div class='producto'>";
                echo"<img src='img/pelota.jpg' alt='producto'>";
                echo "<div class='datosProducto'>";
                     echo "<h2>".$productos['NOMBRE']."</h2>";
                echo "</div>";
                echo "<p>".$productos['PRECIO']."</p>";
                echo "<input type='button' value='Agregar a carrito' onclick='mensaje()'>";
            echo "</div>";
        }?>
    



           


        </div>
    </main>

    <script src="js/agregarCarrito.js"></script>
    <!--Script para los iconos de carrito y usuario-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>

