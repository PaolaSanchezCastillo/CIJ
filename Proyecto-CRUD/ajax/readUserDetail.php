<?php

include('../conexion.php'); 
$response = array(); 

if(isset($_POST['id']) && $_POST['id'] != ""){
    $id = $_POST['id']; 
    //echo  $id ;
    $query = "SELECT * FROM users WHERE id = '$id' "; 
   // echo $query;

   if(!$result = mysqli_query($con, $query)){
        exit(mysqli_error($con));
        echo "Eror"; 
     }
     if(mysqli_num_rows($result) > 0 ){
       while($row = mysqli_fetch_assoc($result)){
            $response = $row; 
            // echo $response;
         }
     } 
     else{
         $response['status'] = 200;
       $response['message'] = "No se encontro info"; 
     }
     //echo $response;

 } else{
     $response['status']; 
    $response['message'] = "Request invalido!";
 }


 echo json_encode($response); 



?>