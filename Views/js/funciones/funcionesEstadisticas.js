function EliminarEstadistica(EstadisticaId) {
  let confirmAction = confirm("Estas seguro de remover está estadistica?");

  if (confirmAction) {
    $.ajax({
      url: "../Controllers/estadisticasController.php",
      type: "GET",
      data: {
        eliminarEstadistica: EstadisticaId,
      },
      success: function (res) {
        if (res != "Error") {
          alert("Estadistica eliminada exitosamente!");
        } else {
          alert("Error al eliminar estadistica");
        }
      },
    });
  }
}
