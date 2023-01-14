<?php
require 'conexionDB.php';



$sql="SELECT * FROM producto";
$query=$conexion->query($sql);
$query->execute();
$query = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="es-MXN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosHeaderNav.css">
    <link rel="stylesheet" href="css/listaProductos.css">
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
        <div class="listaProductos">
        
        <?php 
        foreach($query as $productos){
            
            echo "<div class='producto'>";  
            echo '<form action="anadirCarrito.php" method="post">';         
            $img = base64_encode($productos['IMAGEN']);
            echo '<img src="data:image/jpg;base64,'.$img.'">';
            echo "<div class='datosProducto'>";
            echo "<h2>".$productos['NOMBRE']."</h2>";
            echo "</div>";
            echo "<p>".$productos['PRECIO']."</p>";
            echo "<input type='hidden' name='nombreProducto' value='". $productos['NOMBRE']."'>";
            echo "<button type='submit'>Añadir al carrito</button>";
            echo "</form>";
            echo "</div>";
        }?>
    
    
    



        </div>
    </main>

    <script src="js/agregarCarrito.js"></script>
    <!--Script para los iconos de carrito y usuario-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>

