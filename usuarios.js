$(document).ready(function () {
 datos();

    
});


function datos() {
 $.ajax({
     type: "GET",
     url: "Clases.php?accion=listar",
     dataType: "json",
     success: function (response) {
         let datos=response;
         let table="";
         datos.forEach(dato => {
             table += `
                <tr>
                    <td>${dato.idusuario}</td>
                    <td>${dato.usuario}</td>
                    <td>${dato.activo}</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                
                </tr>
             `
         });
         $("#Contenido_tabla").html(table);

     }
 });


}