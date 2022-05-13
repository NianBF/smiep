
  //var eliminar = document.getElementById("btnEliminar");

  var clear = function(e){
    debugger;
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {


        //código para eliminar
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
      
    });
    //e.preventDefault(); 

};
 //eliminar.addEventListener("click", clear);

  /*var ejemplo = function(e){
    console.log('oh lol');
    e.preventDefault();
  }
  var boton = document.getElementById('btnEliminar');
  boton.addEventListener("click", saludo);
*/

  /* Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })*/
   
     



/*swal.fire({
    text: "estas seguro que deseas eliminar este registro",
    icon:"question",
    confirmButtonText: 'aceptar',
    footer: "esto es importante ¿ESTAS SEGURO?",
    backdrop: true,
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: true,
    stopKeydownPropagation: false,

    
    showCancelButton: true,
    cancelButtonText: "cancelar",

    showCloseButton: true
});*/

