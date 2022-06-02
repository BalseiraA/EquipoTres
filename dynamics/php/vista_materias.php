<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tus materias</title>
</head>
<body>

    <!-- Barra de navegación -->   
    <div id="barra">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Perfil</a></li>
                  <li><a class="dropdown-item" href="#">Materias</a></li>
                  <li><a class="dropdown-item" href="#">Tablero</a></li>
                  <li><a class="dropdown-item" href="#">Calendario</a></li>
                  <li><a class="dropdown-item" href="./juegos.php">Juegos</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <span class="navbar-brand">LISTA DE ASIGNATURAS</span>
        </div>
      </nav>
    </div>
    <!-- Barra de navegación -->
    
    <div id="materias">
      <!-- aqui dentro se añadirán las materias con un js -->
    </div>
    <div id="botones">
      <button id="id">Agregar materias</button>
      <button id="id">Eliminar materias</button>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>