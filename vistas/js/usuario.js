/*Foto*/
$(".nuevaFoto").change(function () {
    let imagen = this.files[0];

    if (imagen["type"] !== "image/jpeg" && imagen["type"] !== "image/png") {
        $(".nuevaFoto").val("");

        swal({
            title: "Error al subir la imagen",
            text: "¡La imagen debe estar en formato JPG o PNG!",
            type: "error",
            confirmButtonText: "¡Cerrar!"
        })
    } else if (imagen["size"] > 2000000) {

        $(".nuevaFoto").val("");

        swal({
            title: "Error al subir la imagen",
            text: "¡La imagen no debe pesar más de 2MB!",
            type: "error",
            confirmButtonText: "¡Cerrar!"
        });

    } else {

        let datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function (event) {
            let rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        })
    }
});

/*Editar Usuario*/
$(document).on("click", ".btnEditarUsuario", function () {

    let idUsuario = $(this).attr("idUsuario");

    let datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({
        url: "ajax/usuarios.ajax.php",
        type: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            $("#editarNombre").val(respuesta["nombre"]);
            $("#editarUsuario").val(respuesta["usuario"]);
            $("#editarPerfil").val(respuesta["perfil"]);

            $("#passwordActual").val(respuesta["password"]);

            if (respuesta["foto"] !== "") {
                $(".previsualizar").attr("src", respuesta["foto"]);
            }
        },
        error: function (respuesta) {
            console.log("respuesta: ", respuesta);
        }
    });
});

/*Activar o Desactivar Usuario*/
$(document).on("click", ".btnActivar", function () {

    let idUsuario = $(this).attr("idUsuario");
    let estadoUsuario = $(this).attr("estadoUsuario");

    let datos = new FormData();
    datos.append("activarId", idUsuario);
    datos.append("activarUsuario", estadoUsuario);

    $.ajax({

        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function () {

            swal({
                title: "El usuario ha sido actualizado",
                type: "success",
                confirmButtonText: "¡Cerrar!"
            }).then(function (result) {

                if (result.value) {
                    window.location = "usuarios";
                }
            });
        }

    })

    if (estadoUsuario === 0) {
        $(this).removeClass('btn-success');
        $(this).addClass('btn-danger');
        $(this).html('Desactivado');
        $(this).attr('estadoUsuario', 1);
    } else {
        $(this).addClass('btn-success');
        $(this).removeClass('btn-danger');
        $(this).html('Activado');
        $(this).attr('estadoUsuario', 0);
    }
});
