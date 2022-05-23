<html>
<body>

<?php

$idproduct = $_POST["idproduct"];
$nombre = $_POST["nombre"];
$desc = $_POST["descripcion"];
$precio = $_POST["precio"];


// Create connection
include("parametrosDB.php");

$consulta="INSERT INTO productos values('','$idproduct','$nombre','$desc','$precio')";

if($conexion->query($consulta)===TRUE){
?>
<center><h1><?php echo 'Producto almacenado satisfactoriamente';
}
else{
  ?>
  <center><h1><?php echo 'Error al registrar el producto '.$conexion->error;
}
$conexion->close();
?>
</h1><br>
<br>
<br>
<a href="home_admin.php">volver</a>
<br>
<br>
<a href="new_producto.html">Registrar otro producto</a>
</center>

</body>
</html>
