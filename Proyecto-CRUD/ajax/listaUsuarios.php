<?php
    include("../conexion.php");
          $data =        '<table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead> '; 
        $query = "SELECT * FROM users"; 

         if(!$result = mysqli_query($con, $query)){
            echo(mysqli_error($con)); 
            
         }
        // echo "OK PHP";
         if(  mysqli_num_rows($result) > 0 ) {


        while($row =  mysqli_fetch_assoc($result)){
             $data .= 
             '<body>
                <tbody>
                     <tr>
                         <td>'.$row['id'].'</td>
                         <td>'.$row['nombre'].'</td>
                         <td>'.$row['apellido_pat'].'</td>
                         <td>'.$row['apellido_mat'].'</td>
                <td>'.$row['correo'].'</td>
                <td> <button  class="btn btn-warning"  onclick="traeUsuario('.$row['id'].')">
                Actualizar</button>
                <button class="btn btn-danger " onclick="eliminaUsuario()">
                Eliminar</button>  </td>
                    </tr>
                    </tbody>
                </body>';
        }
         }
         else{
            $data .= '<tbody><tr><th colspan ="6">
             No se encontraron registros! </th></tr></tbody>
            </table>';
         }


         echo  $data ;

        

?>