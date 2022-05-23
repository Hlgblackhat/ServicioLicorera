<?php
$id = $_GET["id"];

// Create connection
include("parametrosDB.php");
// Check connection
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

$consulta = "SELECT * from productos where productos.id=".$id;
$resultado = $conexion->query($consulta);
if ($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){

        $idproduct = $row["idproduct"];
        $nombre = $row["nombre"];
        $desc = $row["descripcion"];
        $precio = $row["precio"];
    }
}

$conexion->close();

echo "<html>";
echo "<body>";
echo "<h1>ACTUALIZACION DE DATOS</h1>";
echo "<form action=\"update_control.php\" method=\"get\">";

echo "idproduct:<br>";
echo "<input type=\"text\" name=\" idproduct\" value=\"$idproduct\">";
echo "<input type=\"hidden\" id=\"id\" name=\"id\" value=\"$id\">";

echo "<br>";
echo "Nombre:<br>";
echo "<input type=\"text\" name=\"nombre\" value=\"$nombre\">";
echo "<br>";
echo "Descripción:<br>";
echo "<input type=\"text\" name=\"descripcion\" value=\"$desc\">";
echo "<br>";
echo "Precio:<br>";
echo "<input type=\"text\" name=\"precio\" value=\"$precio\">";
echo "<br><br>";

echo "<input type=\"submit\" value=\"Submit\">";
echo "</form>";
echo "</body>";
echo "</html>";
?>
<center>
  <br><br><a href="productos.php">Cancelar </a>
</center>
