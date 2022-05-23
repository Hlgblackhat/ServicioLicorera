<html lang="es" dir="ltr">
<body>

<?php
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$username=$_POST['username'];
$contraseña=$_POST['contraseña'];
$conf_contraseña=$_POST['conf_contraseña'];
$telefono=$_POST['telefono'];

//estableciendo conexion
include("parametrosDB.php");

//registrando nuevo cliente en base de datos
$consulta="INSERT INTO usuarios values('$cedula','$nombre','$apellido','$username','$contraseña','$telefono','2')";

if($conexion->query($consulta)===TRUE){
?>
<center><h1><?php echo 'Registro exitoso!!!';
?><br><br>Bienvenid@ <?php echo $nombre; ?> <?php echo $apellido;
}
else{
  ?>
  <center><h1><?php echo 'Error al guardar el registro '.$conexion->error;
}
$conexion->close();
?>
</h1><br>
<br><br>
<a href="index.php">Iniciar Session</a>
<br>
</center>
</body>
</html>
