<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>


<?php
    //Parametros de conexión a la BD
    //DEFINE('USER', 'root');
    //DEFINE('PW', '';)
    //DEFINE('HOST', 'localhost');
    //DEFINE('BD', 'bd_zapateria');

    //Conexión a la BD
    //$conexion = mysqli_connect(HOST, USER, PW, BD);
    $conexion = mysqli_connect('localhost', 'root', '', 'bd_zapateria2');


    //Establecer caracteres para el hosting
    //mysqli_set_charset($conexion, "utf8mb4");

    //verificamos la conexion con la BD
    if(!$conexion)
    {
        die("La conexión a la BD falló: " + mysqli_error($conexion));
        echo "<h1>mal</h1>";

    }
    /*else
    {
        die("Conexión exitosa a la BD");
        echo "<h1>bien</h1>";
    }*/
    
?>