<html lang="es" dir="ltr">
	<body>
		<?php

		$id =$_GET["id"];
		// Create connection
		include("parametrosDB.php");

		$consulta="DELETE FROM productos WHERE productos.id='$id'";
		if($conexion->query($consulta)==TRUE){
		?>
		 <center><h1><?php echo 'Producto borrado satisfactoriamente';?><?php
		}
		else{
		?>
		<center><h1><?php echo 'Error al borrar el producto'.$conexion->error;
		}
		$conexion->close();
			?>
			</h1><br>
			<br>
			<br>
			<a href="home_admin.php">Volver</a>
			<br>
			<br>
			<a href="new_producto.html">Registrar otro producto</a>
		</center>
	</body>
</html>
