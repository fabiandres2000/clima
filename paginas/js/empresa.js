$( "#r_empresa" ).submit(function(ev) {
    $.ajax({
        type: $('#r_empresa').attr('method'), 
        url: $('#r_empresa').attr('action'),
        data: $('#r_empresa').serialize(),
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
            debugger 
          if(data == ""){
              Swal.fire({
                  position: 'center',
                  icon: "success",
                  title: "Empresa registrada exitosamente.",
                  showConfirmButton: false,
                  timer: 2500
              });
              setTimeout(()=>{
                  window.location.href = "empresas.php";
              },2500)
          }else{
            Swal.fire({
              position: 'center',
              icon: "error",
              title: data,
              showConfirmButton: false,
              timer: 2500
            });
          }
        } 
      });
      ev.preventDefault();
});