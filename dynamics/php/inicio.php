<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma Educativa</title>
</head>

<body>

    <h1>Bienvenid@ a CoyoAulas</h1>    
    <form action='' method='post'>
        <fieldset>
            <input id='apodo' name='apodo' type='apodo' placeholder='Apodo'>
            <br/><br/>
            <input id='contrasena' type='password' placeholder='Contraseña'>
            <br><br>
            <button type='submit'>Iniciar Sesión</button>

            <?php
                $apodo = (isset($_POST["apodo"]) && $_POST["apodo"] !== "")? $_POST["apodo"] : false;
                
                if($apodo != ""){
                    include("./config.php");
                    $con = connect();
                
                    $sql = "SELECT * FROM usuario WHERE Usuario_ID LIKE '$apodo';";
                    $query = mysqli_query($con, $sql);

                    $row = mysqli_fetch_array($query);

                    if($row == ""){
                        echo "
                        <p>No estás registrado :(</p>";
                    }
                    else {
                        header("location: ./vista_materias.php");
                    }
                }
            
            ?>
        </fieldset>
    </form>

    <br/>


    <!-- Formulario Registro  -->
    <form action='./intermedio.php' method='post'>
        <label>¿Aún no te has registrado?</label>
        <br/><br/>
        <button>Crea una cuenta</button>
    </form>

</body>

</html>