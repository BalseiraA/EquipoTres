<?php
    include("../config.php");
    $connect = connect();
    $event = $_POST['evento'];
    $titulo = $event['titulo'];
    $usuario = $event['usuario'];
    $materia = $event['materia'];
    $fecha = $event['fecha'];
    $horaIncio = $event['horaInicio'];
    $horaFin = $event['horaFin'];
    $descripcion = $event['descripcion'];
    $sql = "INSERT INTO eventos (Titulo, Usuario_ID, Materia_ID, Fecha, HoraInicio, HoraFin, Descripcion) VALUES (`$titulo`, $usuario, $materia, `$fecha`, `$horaIncio`, `$horaFin`, `$descripcion`)";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
?>