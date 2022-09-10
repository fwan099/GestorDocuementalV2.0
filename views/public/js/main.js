
//------------------------USUARIOS----------------------------------------//
//borrar usuarios

$(".TB").on("click",".BorrarU" , function (){
    var Uid = $(this).attr("Uid");

    window.location= "index.php?url=usuarios&Uid="+Uid;
})
//Llamar datos para editar

$(".TB").on("click",".EditarU", function(){
    var Uid = $(this).attr("Uid");
    var datos = new FormData();

    datos.append("Uid",Uid);

    $.ajax({
        url :"Ajax/usuariosA.php",
        method:"POST",
        data: datos,
        cache:false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){


            $("#nombresE").val(respuesta["nombres"]);

            $("#Uid").val(respuesta["id_usuario"]);
            $("#paternoE").val(respuesta["paterno"]);
            $("#maternoE").val(respuesta["materno"]);
            $("#usuarioE").val(respuesta["usuario"]);
            $("#claveE").val(respuesta["clave"]);

            $("#rolE").html(respuesta["rol"]);
            $("#rolE").val(respuesta["rol"]);

        }
    });
})

//------------------------PERSONAL y RESOLUCION----------------------------------------//

//Consumo de API
$("#btn-buscar").click(function(){
    let dni = $("#dni-buscar").val();

    $.ajax({
        url: 'controllers/reniecC.php',
        type: 'post',
        data: 'dni='+dni,
        dataType: 'json',
        success: function(r){
            if(r.success){
                $("#nombresN").val(r.result.nombres);
                $("#paternoN").val(r.result.paterno);
                $("#maternoN").val(r.result.materno);
                $("#dniN").val(dni);


            }else{
                alert(r.message);
            }
        }
    })
});
//borrar RESLUCION

$(".TB").on("click",".BorrarR" , function (){
    var Uid = $(this).attr("Uid");

    window.location= "index.php?url=cargarRes&Uid="+Uid;
})
//Llamar datos para editar

$(".TB").on("click",".EditarR", function(){
    var Uid = $(this).attr("Uid");
    var datos = new FormData();

    datos.append("Uid",Uid);

    $.ajax({
        url :"Ajax/resolucionA.php",
        method:"POST",
        data: datos,
        cache:false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){


            $("#nombresE").val(respuesta["nombres"]);
            $("#Uid").val(respuesta["id_resolucion"]);
            $("#paternoE").val(respuesta["paterno"]);
            $("#maternoE").val(respuesta["materno"]);
            $("#dniE").val(respuesta["dni"]);
            $("#numeroE").val(respuesta["numero_res"]);
            $("#fechaE").val(respuesta["fecha"]);
            $("#motivoE").html(respuesta["detalle"]);
            $("#motivoE").val(respuesta["detalle"]);
            $("#motivoE").attr("value",respuesta["id_tipo_resolucion"]);
            $("#documentoActual").val(respuesta["doc_url"]);
            

        }
    });
})
//------------------------MOTIVOS DE RESOLUCION----------------------------------------//
//Llamar datos para editar

$(".TB").on("click",".EditarM", function(){
    var Uid = $(this).attr("Uid");
    var datos = new FormData();

    datos.append("Uid",Uid);

    $.ajax({
        url :"Ajax/motivosA.php",
        method:"POST",
        data: datos,
        cache:false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){


            $("#motivoE").val(respuesta["detalle"]);

            $("#Uid").val(respuesta["id_tipo_resolucion"]);

        }
    });
})
//llamar para borrar

$(".TB").on("click",".BorrarM" , function (){
    var Uid = $(this).attr("Uid");

    window.location= "index.php?url=ingresarMotivo&Uid="+Uid;
})

