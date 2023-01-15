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
    <link rel="stylesheet" href="css/datos.css">
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
     

    

    <h1>Datos</h1>
        <br/>
        <form action='cargarDatosFormulario.php' method='post'>
        <h2>Dirección</h2>
        <div class="direccionPago">
            <p><label for="calle">Calle:</label>
                <input id="calle" type="text" placeholder="Calle/Avenida" name="calleP" required></p> 
        
            <p><label for="colonia">Colonia:</label>
                <input id="colonia" type="text" placeholder="Colonia/Coto" name="coloniaP" required></p>
            
            <p><label for="numero">Número:</label>
                <input id="numero" type="number" placeholder="0, 1, 2..." name="numeroP" min="1" required></p>

            <p><label for="codigopostal">CP:</label>
                <input id="codigopostal" type="text" placeholder="0000..." name="codigopostalP" required></p>

            <p><label for="ciudad">Ciudad:</label>
                <input id="ciudad" type="text" placeholder="Ciudad/Alcaldía" name="ciudadP" required></p>
            
            <p>
                <label for="estado">Estado:</label>
                <select id="estado" name="estadoP">
                    <option value="aguascalientes">Aguascalientes</option>
                    <option value="bajacalifornia">Baja California</option>
                    <option value="bajacaliforniasur">Baja California Sur</option>
                    <option value="campeche">Campeche</option>
                    <option value="cdmx">CDMX</option>
                    <option value="chiapas">Chiapas</option>
                    <option value="chihuahua">Chihuahua</option>
                    <option value="coahuila">Coahuila</option>
                    <option value="colima">Colima</option>
                    <option value="durango">Durango</option>
                    <option value="edomex">Estado de México</option>
                    <option value="guanajuato" selected>Guanajuato</option>
                    <option value="guerrero">Guerrero</option>
                    <option value="hidalgo">Hidalgo</option>
                    <option value="jalisco">Jalisco</option>
                    <option value="michoacan">Michoacán</option>
                    <option value="morelos">Morelos</option>
                    <option value="nayarit">Nayarit</option>
                    <option value="nuevoleon">Nuevo León</option>
                    <option value="oaxaca">Oaxaca</option>
                    <option value="puebla">Puebla</option>
                    <option value="queretaro">Querétaro</option>
                    <option value="quintanaroo">Quintana Roo</option>
                    <option value="sanluispotosi">San Luis Potosí</option>
                    <option value="sinaloa">Sinaloa</option>
                    <option value="sonora">Sonora</option>
                    <option value="tabasco">Tabasco</option>
                    <option value="tamaulipas">Tamaulipas</option>
                    <option value="tlaxcala">Tlaxcala</option>
                    <option value="veracruz">Veracruz</option>
                    <option value="yucatan">Yucatán</option>
                    <option value="zacatecas">Zacatecas</option>
                </select>
            </p>
            
            </div>

            <hr>

            <h2>Tipo de envío</h2>
            <div class="envioPago">
                    <p>
                        <label for="1">Envío estandar:</label>
                        <input  type="radio"  name="envioestandar" id="1" value="1" required>
                        <br/>
                        <label for="2">Envío express:</label>
                        <input  type="radio"  name="envioestandar" id="2" value="2" required>
                        
                    </p>
                    <p>
                        El tiempo de entrega estimado para compras en la CDMX y Área Metropolitana es de 3 a 5 días hábiles. Guadalajara y Monterrey entre 3 a 7 días hábiles. Para el resto de la República Mexicana hasta 15 días hábiles. En caso de no encontrar quién reciba el paquete se dejará una notificación de entrega fallida, la paquetería realizará 2 intentos más como máximo para dejar el paquete en el domicilio señalado al momento de realizar su compra.
                    </p>
              
            </div>

            <hr>
            <h2>Forma de pago</h2>
    <div class="formaPago">
        <p><label for="nombretitular">Nombre del titular de la tarjeta:</label>
            <input id="nombretitular" type="text" placeholder="" name="nombreT" required></p> 
       
        <p><label for="numerotarjeta">Número de tarjeta:</label>
            <input id="numerotarjeta" type="text" placeholder="" name="numeroT" required></p>
        
        <p>
            <label for="tipotarjeta">Tipo de tarjeta:</label>
            <select id="tipotarjeta" name="tipotarjetaP">
                <option value="visa">Visa</option>
                <option value="mastercard">Mastercard</option>
                <option value="americanexpress">American Express</option>
            </select>
        </p>

        <p><label for="cvc">CVV/CVC:</label>
            <input id="cvc" type="password" placeholder="" name="cvcT" maxlength="5" required></p>

        <p>
            <label for="aniotarjeta">Año:</label>
            <select id="aniotarjeta" name="aniotarjeta">
                <option value="1">2023</option>
                <option value="2">2024</option>
                <option value="3">2025</option>
                <option value="4">2026</option>
                <option value="5">2027</option>
                <option value="6">2028</option>
                <option value="7">2029</option>
                <option value="8">2030</option>
                <option value="9">2031</option>
                <option value="10">2032</option>
                <option value="11">2033</option>
                <option value="12">2034</option>
            </select>
        </p>

        <p>
            <label for="mestarjeta">Mes:</label>
            <select id="mestarjeta" name="mestarjeta">
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
                <option value="5">05</option>
                <option value="6">06</option>
                <option value="7">07</option>
                <option value="8">08</option>
                <option value="9">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </p>
    </div>

        <div class="boton">
        <button class="botonDentro" type='submit'>CONFIRMAR</button>
        </div>
        </form>
        
            
    </main>

    <!--Mover imagenes en carrusel-->
    <script src="js/carruselIndex.js"></script>

    <!--Script para los iconos de carrito y usuario-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>



    
    
</body>
</html>