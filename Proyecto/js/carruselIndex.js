let valorImg=0;
let primero=true;
let cambio=0



//Se cambien en 4 segundos 
if (primero){
    cambio=setInterval(cambioSolo,4000);
    primero=false;
}

//Reinicia el tiempo 
function reinicioTiempo(){
    clearInterval(cambio);
    cambio=setInterval(cambioSolo,4000);
}

//Configuracion boton derecho
function flechaDerecha(){
    valorImg+=1;
    if(valorImg==10){
        valorImg=0;
    }
    cambioImagen(valorImg);
    reinicioTiempo();
    
}  

//Configuracion izquierdo
function flechaIzquierda(){
    valorImg-=1;
    if(valorImg==-1){
        valorImg=10;
    }
    cambioImagen(valorImg);
    reinicioTiempo();
}

function cambioSolo(){
    valorImg+=1;
    if(valorImg==10){
        valorImg=0;
    }
    cambioImagen(valorImg);
}



//Menu de imagenes
function cambioImagen(valorImg){
    switch(valorImg){
        case 0:
            document.carruselImg.src="img/1.png";        
            break;

        case 1:
            document.carruselImg.src="img/2.png";
            break;

        case 2:
            document.carruselImg.src="img/3.png";
            break;

        case 3:
            document.carruselImg.src="img/4.png";
            break;

        case 4:
            document.carruselImg.src="img/5.png";        
            break;
    
         case 5:
            document.carruselImg.src="img/6.png";
            break;
    
        case 6:
            document.carruselImg.src="img/7.png";
            break;
    
        case 7:
            document.carruselImg.src="img/8.png";
            break;
        
        case 8:
            document.carruselImg.src="img/9.png";
            break;
        
        case 9:
            document.carruselImg.src="img/10.png";
            break;
    }
    
}




