<?php
if (isset($_POST["type"]) || isset($_POST["isStudent"])) {
    if (isset($_POST["isStudent"])) {
        // Viene de la pagina registro.php
        $isStudent = $_POST["isStudent"];
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        if ($isStudent) {
            $accountNumber = $_POST["accountNumber"];
        } else {
            $rfc = $_POST["rfc"];
            $employeeNumber = $_POST["employeeNumber"];
        }
        $sql = "INSERT INTO usuario (nombre, apellidos, correo, contrasena, ";
        if ($isStudent) {
            $sql .= "NumCuenta";
        } else {
            $sql .= "RFC, NumTrabajador";
        }
        $sql .= ") VALUES ('$name', '$lastName', '$email', '$password', ";
        if ($isStudent) {
            $sql .= "'$accountNumber'";
        } else {
            $sql .= "'$rfc', '$employeeNumber'";
        }
        $sql .= ")";
        include("./config.php");
        $connect = connect();
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "<script>console.log('Usuario registrado correctamente');</script>";
        } else {
            echo "<script>console.log('Error al registrar usuario');</script>";
            echo $sql;
        }
    } else {
        // Viene de la pagina intermedio.php
        $isStudent = $_POST["type"] == "student";
    }
} else {
    header("location: ../../index.html");
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
    <link rel="stylesheet" href="../../statics/styles/registro.css" type="text/css">
    <title>Registro</title>
</head>

<body>
    <div class="container-fluid d-flex text-center vh-100">
        <div class="col-5 container my-auto panel">
            <h1 class="title">Registro <?php if ($isStudent) echo 'Alumno';
                                        else echo 'Profesor'; ?></h1>
            <form action="./registro.php" method="post" target="_self">
                <div class="row">
                    <div class="d-flex flex-wrap justify-content-around mb-4 mx-auto">
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="lastName"></label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <label for="password"></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword"></label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmar contraseña">
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="confirmEmail"></label>
                            <input type="email" class="form-control" id="confirmEmail" placeholder="Confirmar correo electrónico">
                        </div>
                        <?php if (!$isStudent) { ?>
                            <div class="form-group">
                                <label for="rfc"></label>
                                <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC">
                            </div>
                            <div class="form-group">
                                <label for="employeeNumber"></label>
                                <input type="text" class="form-control" id="employeeNumber" name="employeeNumber" placeholder="Numero de trabajador">
                            </div>
                        <?php } ?>
                        <?php if ($isStudent) { ?>
                            <div class="form-group">
                                <label for="accountNumber"></label>
                                <input type="text" class="form-control" id="accountNumber" name="accountNumber" placeholder="Numero de cuenta">
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <input type="hidden" name="isStudent" value="<?php if ($isStudent) echo '1';
                                                                else echo '0' ?>">
                <button class="btn btn-primary" type="submit">Crear cuenta</button>
            </form>
        </div>
    </div>
</body>

</html>