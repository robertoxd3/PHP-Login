$(document).ready(function() {
    $("#LoginForm").on("submit", function(e){
        //e.preventDefault()
        var datos = new FormData(document.getElementById("LoginForm"));

        $.ajax({
            url: '/sistemaDoctor/php/login.php',
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
                        text: "Se Inicio Sesión Correctamente",
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

