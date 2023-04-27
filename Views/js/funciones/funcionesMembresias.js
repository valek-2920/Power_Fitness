function EliminarMembresia(MembresiaId) {
  let confirmAction = confirm("Estas seguro de remover está membresía?");

  if (confirmAction) {
    $.ajax({
      url: "../Controllers/membresiasController.php",
      type: "GET",
      data: {
        eliminarMembresia: MembresiaId,
      },
      success: function (res) {
        if (res != "Error") {
          alert("Membresía eliminada exitosamente!");
        } else {
          alert("Error al eliminar membresía");
        }
      },
    });
  }
}
