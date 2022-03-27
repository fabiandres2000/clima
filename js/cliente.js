$( "#r_test" ).submit(function(ev) {
    $.ajax({
        type: $('#r_test').attr('method'), 
        url: $('#r_test').attr('action'),
        data: $('#r_test').serialize(),
        beforeSend: function(){
            let timerInterval
            Swal.fire({
            title: 'Guardando datos',
            html: 'Espere un momento...',
            timer: 400000,
            timerProgressBar: true,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
            }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
            }
            });          
        }, 
        success: function (data) {
            var jsonData = JSON.parse(data);
            if(jsonData.success == 1){
                setTimeout(()=>{
                    window.location.reload();
                },500)
                window.open('paginas/crear_formulario.php?id_form='+jsonData.mensaje, '_blank');
            }else{
                Swal.fire({
                    position: 'center',
                    icon: "error",
                    title: jsonData.mensaje,
                    showConfirmButton: false,
                    timer: 2500
                  });
            }
        } 
        });
    ev.preventDefault();
});  