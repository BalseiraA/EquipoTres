<?php

    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("PASSWORD", "");
    define("DB", "equipotres");

    function connect(){
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);

        if(!$conexion){
            mysql_error();
            echo "No se pudo conectar a la base";
        }

        return $conexion;
    }

?>