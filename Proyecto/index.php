<!DOCTYPE html>
<html lang="es-MXN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosHeaderNav.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <title>PETCO 2</title>
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
        <div class="carruselImg">
              
            <a class="left" onclick="flechaIzquierda()" ><</a>
            <img  class="carruselImg" name="carruselImg" id="carruselImg"  src="img/pelota.jpg" width="30%" height="20%">
            <a class="right" onclick ="flechaDerecha()">></a>


        </div>
        
    </main>

    <!--Mover imagenes en carrusel-->
    <script src="js/carruselIndex.js"></script>

    <!--Script para los iconos de carrito y usuario-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>