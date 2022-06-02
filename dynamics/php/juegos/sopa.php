<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopita de Letras</title>
</head>
<body>
    
    
    <?php
    
    echo "
        <h1>Sopitas de Letras</h1>
        <form action='./sopa.php'method='POST'>
            <legend>Crea tu propia sopa de letras</legend>
            <br/>
            <textarea name='palabras' id='palabras' cols='30' rows='10' placeholder='Separalas con un espacio'></textarea>
            <br/>
        </form>
        <button id='botonSopitas'>Enviar</button>
    ";

    $palabras = (isset($_POST['palabras']) && $_POST['palabras'] != "" ) ? $_POST['palabras'] : 'Falta llenar el cuadrito de palabras :(';
    
    var_dump($palabras);
    
    ?>
    
    <div>
        <!-- aqui se agrega lo que diga el js -->
    </div>
       
    <script src="../../js/juegos.js" ></script>
</body>
</html>