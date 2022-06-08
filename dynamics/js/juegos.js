const formulario = document.getElementById("formulario");
const botonSopitas = document.getElementById("botonSopitas");
const texTarea = document.getElementById("texTarea");
const contenedor = document.getElementById("contenedor");
const td = document.getElementsByClassName("casilla");

//separa la cadena de palabras en un arreglo de arreglos
function separar(palabras){
    arreglo = palabras.split("/");
    for(var i=0; i<arreglo.length; i++){
        arreglo[i] = arreglo[i].split("-");
    }
}

function acomodarVertical(arreglo){
    var y = 0;
    var min = 1;
    var max = 15;
    var alea = Math.random()*(max-min)+min;
    var ubicacion = (Math.ceil(alea));    
    for (let llave in arreglo){ //controla las palabra
        for (let valor of arreglo[llave]){ //controla las letras
            console.log(valor);
            td[y].innerText = valor;
            y += 30;
        }
    }
}

function acomodarHorizontal(arreglo){
    var y = 0;
    var min = 16;
    var max = 30;
    var alea = Math.random()*(max-min)+min;
    var ubicacion = (Math.ceil(alea));    
    for (let llave in arreglo){ //controla las palabra
        for (let valor of arreglo[llave]){ //controla las letras
            console.log(valor);
            td[y].innerText = valor;
            y += 1;
        }
    }
}

var palabras;
var arreglo;

botonSopitas.addEventListener("click", (evento) => {
    console.log("SE LE DIO CLIK AL BOTON SOPITAS");
    palabras = texTarea.value;
    console.log(palabras);
    formulario.style.display = "none";
    contenedor.style.display = "block";
    separar(palabras);
    console.log(arreglo);
    console.log(arreglo.length);
    acomodarVertical(arreglo);
    acomodarHorizontal(arreglo);
    console.log(td);
});

contenedor.addEventListener("click", (evento) => {
    evento.target.style.backgroundColor = "#CCBAF1";
    console.log(contenedor);
});