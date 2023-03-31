function InactivarUsuario(UsuarioId) {
  let confirmAction = confirm("Estas seguro de inactivar este usuario?");

  if (confirmAction) {
    $.ajax({
      url: "../Controllers/usuariosController.php",
      type: "GET",
      data: {
        inactivarUsuario: UsuarioId,
      },
      success: function (res) {
        if (res != "Error") {
          alert("Usuario inactivado existosamente!");
        } else {
          alert("Error al inactivar usuario");
        }
      },
    });
  }
}

function ActivarUsuario(UsuarioId) {
  let confirmAction = confirm("Estas seguro de activar este usuario?");

  if (confirmAction) {
    $.ajax({
      url: "../Controllers/usuariosController.php",
      type: "GET",
      data: {
        activarUsuario: UsuarioId,
      },
      success: function (res) {
        if (res != "Error") {
          alert("Usuario activado existosamente!");
        } else {
          alert("Error al activar usuario");
        }
      },
    });
  }
}
