<html lang="es" dir="ltr">
  <body>
    <?php
    $id = $_GET["id"];

    $idproduct = $_GET["idproduct"];
    $nombre = $_GET["nombre"];
    $desc = $_GET["descripcion"];
    $precio = $_GET["precio"];

    include("parametrosDB.php");

    if ($conexion->connect_error) {
      die("Connection failed: " . $conexion->connect_error);
    }

    $consulta="UPDATE productos SET productos.id = '".$id."', productos.idproduct = '".$idproduct."', productos.nombre = '".$nombre."', productos.descripcion = '".$desc."', productos.precio = '".$precio."' WHERE productos.id=".$id;

    if($conexion->query($consulta)===TRUE){
      ?>
	     <center><h1><?php echo 'Prodcuto actualizado correctamente';
	    }
      else{
      ?>
		  <center><h1><?php echo 'Error al actualizar el producto'.$conexion->error;
	    }
      $conexion->close();
      ?>
      </h1><br>
      <a href="productos.php">Ver Lista</a>
      <br><br>
      <a href="new_producto.html">Registrar otro producto</a>
      <br><br>
      <a href="home_admin.php">Volver</a>
      <br><br>
      <a href="salir.php">Cerrar Session</a>
    </center>
</body>
</html>
