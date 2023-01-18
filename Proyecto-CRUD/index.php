<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>
<div class="container-fluid">
<div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Creación de Usuarios</h1>
        <p class="col-md-8 fs-4">Proyecto CRUD para crear nuevos usuarios.</p>
        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#addUser">Nuevo</button>
        <!-- <button class="btn btn-primary btn-lg" type="button" id="test" >TEST</button>
        <div class="divisor">
        <p>ESTE ES EL DIV</p>
        </div>
    -->
    </div>

<div class="row">
    <div class="col-md-12">
    <h2>Lista de Usuarios</h2>
    <div class="usuarios">

    </div>
    </div>

</div>


</div>

   

    

 <!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="addUser" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">Editar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="mb-3">
            
                <input type="hidden" class="form-control" id="update_id" >
            </div>
        
            <div class="mb-3">
                <label for="update_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="update_nombre" >
            </div>
            <div class="mb-3">
                <label for="update_apellido_pat" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="update_apellido_pat">
            </div>
            <div class="mb-3">
                <label for="update_apellido_mat" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="update_apellido_mat">
            </div>
            <div class="mb-3">
                <label for="update_correo" class="form-label">Correo</label>
                <input type="mail" class="form-control" id="update_correo">
            </div>
            
                  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="agregarUsuario();">Guardar</button>
      </div>
    </div>
  </div>
</div>   




<!-- Modal -->
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUser" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar un nuevo usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" >
            </div>
            <div class="mb-3">
                <label for="apellido_pat" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellido_pat">
            </div>
            <div class="mb-3">
                <label for="apellido_mat" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="apellido_mat">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="mail" class="form-control" id="correo">
            </div>
            
                  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="agregarUsuario();">Guardar</button>
      </div>
    </div>
  </div>
</div>

    
</body> 
</html>