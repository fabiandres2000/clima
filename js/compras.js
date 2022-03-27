$( "#r_ce" ).submit(function(ev) {
    $.ajax({
        type: $('#r_ce').attr('method'), 
        url: $('#r_ce').attr('action'),
        data: $('#r_ce').serialize(),
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
                  title: "Venta registrada exitosamente.",
                  showConfirmButton: false,
                  timer: 2500
              });
              setTimeout(()=>{
                window.location.reload();
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


$( "#v_cn" ).submit(function(ev) {
    $.ajax({
        type: $('#v_cn').attr('method'), 
        url: $('#v_cn').attr('action'),
        data: $('#v_cn').serialize(),
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
                  title: "Venta registrada exitosamente.",
                  showConfirmButton: false,
                  timer: 2500
              });
              setTimeout(()=>{
                window.location.reload();
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