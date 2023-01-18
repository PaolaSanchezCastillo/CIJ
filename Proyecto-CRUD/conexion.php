<?php 

    // PARAMETROS INICIALES PARA LA CONEXION A LA BD
    $host = '127.0.0.1'; 
    $user = 'root'; 
    $password = "1206Luis"; 
    $database = "CIJ"; 


    // CREANDO UNA NUEVA CONEXION 

    $con = new mysqli($host, $user, $password, $database); 
    // Relizar la primer instancia a la conexion realizada 

    if ($mysqli -> connect_errno) {
        return "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      else{
         // echo "Conexion Exitosa";
      }

?> 
