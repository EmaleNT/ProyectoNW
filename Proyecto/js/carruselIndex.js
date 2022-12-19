let valorImg=0;
let primero=true;
let cambio=0



//Se cambien en 4 segundos 
if (primero){
    cambio=setInterval(cambioSolo,4000);
    primero=false;
}



//Configuracion boton derecho
function flechaDerecha(){
    valorImg+=1;
    if(valorImg==4){
        valorImg=0;
    }
    clearInterval(cambio);
    cambio=setInterval(cambioSolo,4000);
    cambioImagen(valorImg);

}  

//Configuracion izquierdo
function flechaIzquierda(){
    valorImg-=1;
    if(valorImg==-1){
        valorImg=3;
    }
    clearInterval(cambio);
    cambio=setInterval(cambioSolo,4000);
    cambioImagen(valorImg);
}

function cambioSolo(){
    valorImg+=1;
    if(valorImg==4){
        valorImg=0;
    }
    cambioImagen(valorImg);
}


//Menu de imagenes
function cambioImagen(valorImg){
    switch(valorImg){
        case 0:
            document.carruselImg.src="/img/pelota.jpg";
            break;

        case 1:
            document.carruselImg.src="/img/comida.jpg";
            break;

        case 2:
            document.carruselImg.src="/img/figus.jpg";
            break;

        case 3:
            document.carruselImg.src="/img/juguetes.jpg";
            break;
    }
    
}




