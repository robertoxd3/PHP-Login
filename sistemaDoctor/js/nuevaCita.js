$(document).ready(function() {
    $("#CitasForm").on("submit", function(e){
        //e.preventDefault()
        var datos = new FormData(document.getElementById("CitasForm"));

        $.ajax({
            url: '/sistemaDoctor/php/nuevacita.php',
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
                        text: "Se ha registrado su cita",
                        icon: 'success',
                        confirmButtonText: 'OK'
                      }).then((result) => {
                        if (result.value) {
                          location.href="/sistemaDoctor/citas.php";
                        } else if (result.dismiss) 
                        {
                           
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

