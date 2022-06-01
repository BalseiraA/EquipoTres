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
        <h1>Bienvenid@ a CoyoAulas</h1>    
        <form>
            <input id='correo' type='email' placeholder='Correo electrócnico'>
            <br/><br/>
            <input id='contrasena' type='password' placeholder='Contraseña'>
            <p>¿Olvidaste tu contraseña o tu nombre de usuario? <a href=''>click aquí</a> </p>
            <button>Iniciar Sesión</button>
        </form>

        <br/>

        <!-- Formulario Registro  -->
        <form action='./registro.php' method='post'>
            <label>¿Aún no te has registrado?</label>
            <br/><br/>
            <button>Crea una cuenta</button>
        </form>
    ";
    ?>


</body>
</html>
