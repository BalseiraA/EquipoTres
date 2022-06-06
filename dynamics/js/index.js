const menu = document.getElementById("menu");
const mostrar = document.getElementById("mostrar");
const titulo = document.getElementById("titulo");
const tit = document.getElementById("tit");

menu.addEventListener("click", (event) => {
    const eleccion = event.target;

    if(eleccion.id == 'perfil'){
        titulo.innerHTML = 'Perfil';
        tit.innerHTML = '<span class="navbar-brand" id="tit">INFORMACIÓN VISIBLE</span>';
        console.log("perfil");
    }
    if(eleccion.id == 'materias'){
        titulo.innerHTML = 'Materias';
        tit.innerHTML = '<span class="navbar-brand" id="tit">LISTA DE ASIGNATURAS</span>';
        mostrar.innerHTML += '<div id="materias"></div><div id="botones"> <button id="id">Agregar materias</button><button id="id">Eliminar materias</button></div>';
        console.log("materias");
    }
    if(eleccion.id == 'tablero'){
        titulo.innerHTML = 'Tablero';
        tit.innerHTML = '<span class="navbar-brand" id="tit">TABLERO</span>';
        console.log("tablero");
    }
    if(eleccion.id == 'calendario'){
        titulo.innerHTML = 'Calendario';
        tit.innerHTML = '<span class="navbar-brand" id="tit">CALENDARIO</span>';
        console.log("calendario");
    }
    if(eleccion.id == 'juegos'){
        titulo.innerHTML = 'Juegos';
        tit.innerHTML = '<span class="navbar-brand" id="tit">JUEGOS</span>';
        mostrar.innerHTML += "<h3><span>Sopita de Letras</span></h3><h4><span><a id='jugarSopitas' href='./juegos/sopa.php'>Jugar</a></span></h4><h3><span>Memorama</span></h3><h4><span><a id='jugarMemo' href='./juegos/memorama.php'>Jugar</a></span></h4>";
        console.log("juegos");
    }
});