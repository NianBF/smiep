

let salir = document.querySelector(".salir")

function msgsalir() {
  Swal.fire({
      title: 'estas seguro ?',
      text: 'estas seguro que deseas salir',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, salir!'
    }).then((result) => {
      if (result.isConfirmed) {
        
  
        $.ajax({
          type: 'GET',
          url: '../../controller/salirCtrl.php',
          success: function(response)
          {					
         					//alert("ggg");
         }
        
       });
       
      }
    }) 
     
  }  

/* salir.addEventListener("click", 
 }) */