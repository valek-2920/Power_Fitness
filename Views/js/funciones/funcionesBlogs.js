function EliminarBlog(BlogId) {
  let confirmAction = confirm("Estas seguro de remover este blog?");

  if (confirmAction) {
    $.ajax({
      url: "../Controllers/blogsController.php",
      type: "GET",
      data: {
        eliminarBlog: BlogId,
      },
      success: function (res) {
        if (res != "Error") {
          alert("Blog eliminado exitosamente!");
        } else {
          alert("Error al eliminar blog");
        }
      },
    });
  }
}
