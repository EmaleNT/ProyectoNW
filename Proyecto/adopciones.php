<!DOCTYPE html>
<html lang="es-MXN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosHeaderNav.css">
    <link rel="stylesheet" href="css/adopciones.css">
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
        <p></p>
        <div class="tituadopta">
            <h2 style="text-align:center;">El amor no se compra</h2>
            <h1 style="text-align:center;">SE ADOPTA</h1>
        </div>    

        <p></p>
        <div class="msjadopta">
        <p>
            Es posible visualizar la adopción cómo una alternativa a la hora de obtener un animal de compañía.
            Sólo un perro puede proporciona una sensación de bienestar emocional a través del amor incondicional que dan, son una gran
            compañía para personas solas. Inclusive pueden ayudar a las personas a recuperar de un trauma persona.
            Cuando un perro o gato no es adoptado, está condenado a pasar el resto de sus días en un refugio (en el mejor escenario),
            ser sacrificado en un centro antirrabico o perder la vida por las calles de la ciudad.
        </p>
        </div>

    <p></p>
    <div class="videos">
        <p style="text-align:center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Jv1iolzbvZg" title="YouTube video player" frameborder="20" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HGN_t0kZos0" title="YouTube video player" frameborder="3" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/0FHFNINzxbo" title="YouTube video player" frameborder="3" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/hrYScZhMeXU" title="YouTube video player" frameborder="3" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p>
        </div>

        <hr>
        <div class="busqueda">
        <h3>Busca videos relacionados en YouTube</h3>
        <p>
            <form action="https://www.youtube.com/results">
                <input type="text" name="search_query" placeholder="Quiero adoptar..." required>
                <button>Buscar</button>
            </form>
        </p>
            </div>
    </main>

    
    <!--Script para los iconos de carrito y usuario-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>