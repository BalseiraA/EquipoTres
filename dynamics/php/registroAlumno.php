<?php
  include("./config.php");
  $con = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    <form action='' method='post'>
        <fieldset>
            <legend>Registro</legend>
            <input type="text" id="apodo" name="apodo" placeholder="Apodo" required>
            <input type='text' id='nombre' name='nombre' placeholder='Nombre' required>
            <br/>
            <input type='text' id='apellido' name='apellido' placeholder='Apellidos' required>
            <input type='password' id='contrasena' name='contrasena' placeholder='Contraseña' required>
            <br/>
            <input type='password' id='contrasenaConfir' name='contrasenaConfir' placeholder='Confirmar Contraseña' required>
            <input type='email' id='correo' name='correo' placeholder='Correo Electrónico' required>
            <br/>
            <input type='email' id='correoConfir' name='correoConfir' placeholder='Confirmar correo Electrónico' required>
            <input type='number' id='ncuenta' name='ncuenta' placeholder='Numero de Cuenta' required>
            <br/>
            <select name="grupo" id="grupo">
            </select>
            <br>
            <button type='submit' id="crear">Crear Cuenta</button>
            <br/>
        </fieldset>
    </form>
    <?php  
        $apodo = (isset($_POST['apodo']) && $_POST["apodo"] != "") ? $_POST['apodo'] : "Falta Apodo";

        $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "") ? $_POST['nombre'] : "Falta Nombre";
        $apellido = (isset($_POST['apellido']) && $_POST["apellido"] != "") ? $_POST['apellido'] : "Falta Apellido";
        
        $correo = (isset($_POST['correo']) && $_POST["correo"] != "") ? $_POST['correo'] : "Falta Correo";
        $correoConfir = (isset($_POST['correoConfir']) && $_POST["correoConfir"] != "") ? $_POST['correoConfir'] : "Falta Confirmación de Correo";

        $contrasena = (isset($_POST['contrasena']) && $_POST["contrasena"] != "") ? $_POST['contrasena'] : "Falta Contraseña";
        $contrasena_confir = (isset($_POST['contrasenaConfir']) && $_POST["contrasenaConfir"] != "") ? $_POST['contrasenaConfir'] : "Falta Confirmación de Contraseña";

        $ncuenta = (isset($_POST['ncuenta']) && $_POST["ncuenta"] != "") ? $_POST['ncuenta'] : "Falta Número de Cuenta";
        $grupo = (isset($_POST['grupo']) && $_POST["grupo"] != "") ? $_POST['grupo'] : "Falta Grupo";
        
        echo "<br/><br/>";
        echo "<h3>Información de usuario</h3>";
        echo $nombre."<br/>".$apellido."<br/>".$correo."<br/>".$contrasena."<br/>".$ncuenta."<br>".$grupo."<br>".$apodo;

        $sql = "SELECT Usuario_ID FROM usuario WHERE Usuario_ID LIKE '$apodo'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);
        
        if($row == "")
        {
            $sql = "INSERT INTO usuario VALUES ('$apodo', $grupo, '$nombre', '$apellido', '$correo', '$contrasena', '', '$ncuenta', '')";
            mysqli_query($con, $sql);
        }
        else{
            echo "<p>Ese apodo ya está ocupado, intenta uno nuevo</p>";
        }
    ?>

    <script src="../js/registroAlumno.js"></script>

</body>
</html>








