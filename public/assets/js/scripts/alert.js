

$('.formulario-eliminar').submit(function(e){
    e.preventDefault();


Swal.fire({
title: 'Estás seguro?',
text: "Estos datos se eliminará definitivamente ",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Si, eliminar!'

}).then((result) => {
if (result.isConfirmed) {
    Swal.fire(
        'Eliminado!',
        'El registro se eliminó con éxito.',
        'success'
        )
   

 this.submit();
}
})
});



