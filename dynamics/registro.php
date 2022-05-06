<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        echo "
            <form action='./registro.php' method='post'>
                <fieldset>
                    <legend>Registro</legend>
                    <label for='nombre'>Nombre</label>
                    <input type='text' id='nombre' name='nombre' placeholder='Nombre Completo' required>
                    <br/><br/>
                    <label for='usuario'>Usuario</label>
                    <input type='text' id='usuario' name='usuario' required>
                    <br/><br/>
                    
                    <label for='correo'>Correo</label>
                    <input type='email' id='correo' name='correo' required>
                    <br/><br/>
                    <label for='contra'>Contraseña</label>
                    <input type='password' id='contra' name='contra' required>
                    <br/><br/>
                    
                    <label for='ncuenta'>Número de Cuenta</label>
                    <input type='number' id='ncuenta' name='ncuenta' required>
                    <br/><br/>
                    <button type='submit'>Enviar</button>
                    <button type='reset'>Eliminar</button>
                </fieldset>
                </form>
        ";
        
        $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "") ? $_POST['nombre'] : "Falta Nombre";
        $usuario = (isset($_POST['usuario']) && $_POST["usuario"] != "") ? $_POST['usuario'] : "Falta Usuario";
        $correo = (isset($_POST['correo']) && $_POST["correo"] != "") ? $_POST['correo'] : "Falta Correo";
        $contra = (isset($_POST['contra']) && $_POST["contra"] != "") ? $_POST['contra'] : "Falta Contraseña";
        $ncuenta = (isset($_POST['ncuenta']) && $_POST["ncuenta"] != "") ? $_POST['ncuenta'] : "Falta Número de Cuenta";

        echo "<br/><br/>";
        echo "<h3>Información de usuario</h3>";
        echo $nombre."<br/>".$usuario."<br/>".$correo."<br/>".$contra."<br/>".$ncuenta;
    
    ?>

</body>
</html>








