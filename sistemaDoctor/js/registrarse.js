$(document).ready(function() {
    $("#RegistroForm").on("submit", function(e){
        //e.preventDefault()
        var datos = new FormData(document.getElementById("RegistroForm"));

        $.ajax({
            url: '/sistemaDoctor/php/registrar.php',
            type: 'post',
            data: datos,
            contentType: false,
            processData: false,
            success: function(data) {
                console.log(data);
                if(data==1)
                {
                    Swal.fire({
                        title: 'Completado!',
                        text: "Se ha creado la cuenta Correctamente, ahora puede iniciar Sesión",
                        icon: 'success',
                        confirmButtonText: 'OK'
                      }).then((result) => {
                        if (result.value) {
                          location.href="/sistemaDoctor/vistaPaciente.php";
                        } else if (result.dismiss) 
                        {
                             //  location.href="/administracion.php";
                      }

                      })

                } else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salió mal!'
                      })
                }
                               
            },

        });
        return false;
    });
});

