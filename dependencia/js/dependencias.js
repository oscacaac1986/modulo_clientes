$(document).ready(function () {
    datos();
      $("#prueba").DataTable({
       /* "ajax":"https://localhost/modulo_clientes/dependencia/php/crea_obj_dep.php?accion=listar" */
      
    }); 

    
});
    
function datos() {
    $.ajax({
        type: "GET",
        url: "https://localhost/modulo_clientes/dependencia/php/crea_obj_dep.php?accion=listar",
        dataType: "json",
        success: function (response) {
            let datos=response;
            console.log(datos);
            let table="";
            datos.forEach(dato => {
                table += `
                   <tr>
                       <td>${dato.iddependencia}</td>
                       <td>${dato.dependencia}</td>
                       <td>Editar</td>
                       <td>Eliminar</td>
                   </tr>
                `
            });
            $("#Contenido_tabla").html(table);
   
        }
    });
    
 }