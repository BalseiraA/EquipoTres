console.log("HOLAAAA");

const formulario = document.getElementById("formulario");
const botonSopitas = document.getElementById("botonSopitas");
const texTarea = document.getElementById("texTarea");
const contenedor = document.getElementById("contenedor");

var palabras;
var arreglo;

botonSopitas.addEventListener("click", (evento) => {
    console.log("SE LE DIO CLIK AL BOTON SOPITAS");
    palabras = texTarea.value;
    console.log(palabras);
    formulario.style.display = "none";
    contenedor.style.display = "block";
    arreglo = palabras.split(" ");
    console.log(arreglo);
});

contenedor.addEventListener("click", (evento) => {
    evento.target.style.backgroundColor = "#CCBAF1";
});



// const botonMemo = document.getElementById("jugarMemo");
// botonMemo.addEventListener("click", () => {
//     console.log("SE LE DIO CLIK CL BOTON MEMORAMA");
// });