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
                    <input type='text' id='nombre' name='nombre' placeholder='Nombre' required>
                    <input type='text' id='apellido' name='apellido' placeholder='Apellido' required>
                    <br/>
                    <input type='text' id='contrasena' name='contrasena' placeholder='Contraseña' required>
                    <input type='text' id='contrasenaConfir' name='contrasenaConfir' placeholder='Confirmar Contraseña' required>
                    <br/>
                    <input type='email' id='correo' name='correo' placeholder='Correo Electrónico' required>
                    <input type='email' id='correoConfir' name='correoConfir' placeholder='Confirmar correo Electrónico' required>
                    <br/>
                    <input type='number' id='ntrabajador' name='ntrabajador' placeholder='Número de Trabajador' required>
                    <input type='number' id='RFC' name='RFC' placeholder='RFC' required>
                    <br/>
                    <input type='number' id='ncuenta' name='ncuenta' placeholder='Numero de Cuenta' required>
                    <br/>
                    <button type='submit'>Crear Cuenta</button>
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








