<?php
    echo('AddUsuario');
    if( 
    isset($_POST['nombre']) &&
    isset($_POST['apellido_pat']) && 
    //isset($_POST['apellido_mat']) && 
    isset($_POST['correo']) 
    ){
       // return('Entra!');
        $nombre = $_POST['nombre']; 
        $apellido_pat = $_POST['apellido_pat']; 
       if(isset($_POST['apellido_mat'])){
        $apellido_mat = $_POST['apellido_mat']; 
       }
        $correo = $_POST['correo']; 
        echo($nombre);
        echo($apellido_pat);
       // echo($apellido_mat);
        echo($correo);
        include('../conexion.php'); 
       // echo("Despues del include");
       if($_POST['apellido_mat']   != null ||   $_POST['apellido_mat']  != ''){
        $query = "INSERT INTO users(nombre, apellido_pat, apellido_mat, correo) 
        VALUES ('$nombre', '$apellido_pat', '$apellido_mat', '$correo')";

       }else{
        $query = "INSERT INTO users(nombre, apellido_pat, correo) 
        VALUES ('$nombre', '$apellido_pat', '$correo')";
       }
            echo($query);
            if( $result = mysqli_query($con, $query) ){
               echo 'Realizo el insert'; 

            }else{
             
            }
    }
?>