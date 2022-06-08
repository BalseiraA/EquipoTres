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
        <section id='formulario'>
            <form action='./sopa.php' method='POST' style-display='block'>
                <legend>Crea tu propia sopa de letras</legend>
                <p>Separa las palabras entre si con un / y estas por letras con un guion. Ejemplo: h-o-l-a/c-o-m-o/e-s-t-a-s</p>
                <textarea id='texTarea' name='texTarea' cols='30' rows='10'></textarea>
                <br/>
            </form>
            <button id='botonSopitas'>Enviar</button>
        </section>
    ";

    $ID = 1;
        
    echo "
        <table border='1' align='center' style='center' cellpadding='5%'>
        <tbody id='contenedor'>
    ";
            for ($x=0; $x<30; $x++){ // filas horizontales
                echo "<tr>";
                for ($y=0; $y<30; $y++){ // casillas
                    $rango_ltrs = rand(97, 122);
                    $letra = chr($rango_ltrs);
                    echo "<td id='$ID' class='casilla'> $letra </td>";
                    $ID++;
            }
            echo '</tr>';
        }
    echo "
        </tbody>
        </table>
    ";
        
    ?>
       
    <script src="../../js/juegos.js" ></script>
</body>
</html>