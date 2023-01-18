
$(document).ready(function(){
    readUsers();
});

function readUsers(){
    
    console.log("Peticion READ");
            $.get("ajax/listaUsuarios.php", {}, function(data, status){
                console.log(data);
            $(".usuarios").html(data); 
        })
}

function agregarUsuario(){
    console.log("Se llamo a la funcion!"); 
    
    var nombre =  $("#nombre").val(); 
    let apellido_pat = $("#apellido_pat").val(); 
    let apellido_mat = $("#apellido_mat").val(); 
    let correo = $("#correo").val(); 
    if(nombre.length >0  && apellido_pat.length  > 0 
         && correo.length > 0  ){
 //const PI = 3.1416; 
            console.log(nombre); 
            console.log(apellido_pat); 
            console.log(apellido_mat); 
            console.log(correo);
            // Peticion AJAX 
            $.post("ajax/addUsuario.php", {
                nombre : nombre, 
                apellido_pat : apellido_pat, 
                apellido_mat: apellido_mat, 
                correo : correo
            },function(data, status){
                console.log(data); 
                console.log(status);
                $("#addUser").modal("hide");  //Cerrar el modal
                readUsers();
            }
            )  
    }else{
        alert("Falta ingresar datos!")
    }
   
    
}


function traeUsuario(id){
  
    console.log("ID" , id); 
    $("#update_id").val(id);

    $.post('ajax/readUserDetail.php', {
        id : id
    }, function(data, status){
       // console.log(data); 
       console.log(data);
       var usuario_datos = JSON.parse(data); 
       console.log(usuario_datos);
       $("#update_nombre").val(usuario_datos.nombre);
       $("#update_apellido_pat").val(usuario_datos.apellido_pat);
       $("#update_apellido_mat").val(usuario_datos.apellido_mat);
       $("#update_correo").val(usuario_datos.correo);

    })


    $("#updateModal").modal("show"); 

}



