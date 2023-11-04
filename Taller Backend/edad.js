
const contenido = document.getElementById("contenido");

let edad= parseInt(prompt("Escribe tu edad"));

if(edad>="18"){

    contenido.innerHTML= edad+" años:  Eres mayor de edad";

}else{
    contenido.innerHTML= edad+": años No eres mayor de edad";
}


