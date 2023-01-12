<!DOCTYPE html>
<html lang="es-MXN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosHeaderNav.css">
    <link rel="stylesheet" href="css/carrito.css">
    <title>Nombre Tienda</title>
</head>
<body>

    <header>
        <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
    </header>
    
    <nav>
       
       
       <ul>
           <li><a href="index.php">Inicio</a></li>
           <li><a href="listaProductos.php">Productos</a></li>
           <li><a href="nosotors.php">Nosotros</a></li>
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
            <tr>
                <td><img src="img/pelota.jpg" width="180" height="180"></td>
                <td>Informacion producto <br/> <input type="button" > Cantidad:  <input type="number" placeholder="1"></td>
                <td>$100</td>
                <td>Boton Eliminar</td>
            </tr>
        </table>
    </main>

    

</body>
</html>