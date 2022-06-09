<?php

session_name("Sesion_usuario");
session_id("123456789");
session_start();

if (isset($_SESSION["usuario"])) {
    header("location: ./vista_materias.php");
} else {
    include("./config.php");
    $connect = connect();

    $email = (isset($_POST["email"]) && $_POST["email"] != "") ? $_POST["email"] : false;
    $password = (isset($_POST["password"]) && $_POST["password"] != "") ? $_POST["password"] : false;
    if ($email !== false && $password !== false) {
        $sql = "SELECT * FROM usuarios WHERE correo = '$email' and contraseña = '$password'";
        $result = mysqli_query($connect, $sql);
        $usuario = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $usuario = $row;
        }
        if ($usuario !== null) {
            $_SESSION["usuario"] = json_encode($usuario);
            header("location: ./vista_materias.php");
        } else {
            $_SESSION["usuario"] = null;
            $hasSession = false;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../statics/styles/general.css" type="text/css">
    <link rel="stylesheet" href="../../statics/styles/intermedio.css" type="text/css">
    <title>Inicia Sesión</title>

</head>

<body>
    <div class="container-fluid d-flex text-center vh-100">
        <div class="col-5 container my-auto panel">
            <h1 class="title">!Bienvenid@ a CoyoAulas!</h1>
            <form action="./intermedio.php" method="post" target="_self">
                <div class="row">
                    <div class="col-7 mx-auto mb-4">
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="contraseña"></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        </div>

                    </div>
                </div>
                <p>¿Olvidaste tu contraseña o tu nombre de usuario? <a href="./getPassword.php">Click aquí</a></p>
                <button class="btn btn-primary" type="submit">Iniciar sesión</button>
            </form>
            <br>
            <p>¿Aún no te has registrado?</p>
            <a class="btn btn-primary" type="submit" name="type" href=<?php echo './registro.php?type=' . $_POST["type"] ?>>Regístrate</a>
        </div>
    </div>
</body>

</html>