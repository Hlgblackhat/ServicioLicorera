<?php
include("parametrosDB.php");

if($conexion->connect_error){
  die("Conexion Fallida: ".$conexion->connect_error);
}

$consulta="SELECT * FROM productos";
$resultado = $conexion->query($consulta);

echo "<html>\n";
echo "\t<head>\n";
echo "\t\t<title>Lista de productos</title>\n";
echo "\t\t<meta http-equiv= \"refresh\" content=\"5\" />\n";
echo "\t\t<meta charset=\"UTF-8\"/>\n";
echo "\t</head>\n";
echo "\t<body>\n";

if ($resultado->num_rows > 0) {
    echo "<div align=\"center\">\n";
    echo "<table border=2>\n";
    echo "<tr BGCOLOR=\"#D3D3D3\">\n";
    echo "<td>id</td>\n";
    echo "<td>idproduct</td>\n";
    echo "<td>nombre</td>\n";
    echo "<td>descripcion</td>\n";
    echo "<td>precio</td>\n";
    echo "<td colspan=\"2\">Acción</td>\n";
    echo "</tr>";

    $fila=1;
    while($row = $resultado->fetch_assoc()) {
        if($fila % 2 == 0){
	        echo "<tr BGCOLOR=\"#D3D3D3\">\n";
        }
        else{
          echo "<tr>\n";
      	}
        echo "<td>".$row["id"]."</td>\n<td>".$row["idproduct"]."</td>\n<td>".$row["nombre"]."</td>\n<td>".$row["descripcion"]."</td>\n<td>".$row["precio"]."</
        td>\n<td><a href=\"delete_producto.php?id=".$row["id"]."\">Delete</td><td><a href=\"update_producto.php?id=".$row["id"]."\">Update</td>\n";
        echo "</tr>\n";
        $fila=$fila+1;
    }
    echo "</table>\n";
echo "</div>\n";

echo "</body>\n";
echo "</html>\n";

} else {
    echo "0 results";
}

$conexion->close();
 ?>
 <center>
 <br><br>
 <a href="new_producto.html">Registrar otro producto</a>
 <br><br>
 <a href="home_admin.php">Volver</a>
 <br><br>
 <a href="salir.php">Cerrar Sesión</a>
 </center>
