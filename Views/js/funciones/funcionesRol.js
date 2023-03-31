function EliminarRol(RolId) {
  let confirmAction = confirm("Estas seguro de eliminar este rol?");

  if (confirmAction) {
    $.ajax({
      url: "../Controllers/rolesController.php",
      type: "GET",
      data: {
        eliminarRol: RolId,
      },
      success: function (res) {
        if (res != "Error") {
          alert("Rol eliminado existosamente!");
        } else {
          alert("Error al eliminar rol");
        }
      },
    });
  }
}
