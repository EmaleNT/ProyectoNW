<?php 

function creaSession(){
     // Iniciar sesión
     session_start();

     // Crear carrito si no existe
     if (!isset($_SESSION['carrito'])) {
         $_SESSION['carrito'] = array();
     }
}
   

//$nombreProducto='Gato';

//Añadir carrito


function anadir($nombreProducto){
    if (isset($_SESSION['carrito'])) {
        if(array_key_exists($nombreProducto,$_SESSION['carrito'])){
            $_SESSION['carrito'][$nombreProducto]++;
        }
        else{
            $_SESSION['carrito'][$nombreProducto]=1;
        }
        
    }
}



// Eliminar producto del carrito
function eliminar($nombreProducto){
    if (isset($_SESSION['carrito'])) {
        if(array_key_exists($nombreProducto,$_SESSION['carrito'])){
            unset($_SESSION['carrito'][$nombreProducto]);
        }   
    }
}



/*
// Mostrar carrito
echo "Productos en el carrito:<br>";
print_r($_SESSION['carrito']);
echo $_SESSION['carrito']['Gato']; 
echo $_SESSION['carrito']['Perro']; 
*/

function destruirSession(){
    session_destroy();
}
//print_r($_SESSION['carrito']);
//destruirSession();
?>