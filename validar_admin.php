<html lang="es" dir="ltr">
  <body>
    <?php

    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];


    session_start();
    $_SESSION['usuario']=$usuario;


    include("parametrosDB.php");


    $consulta="SELECT*FROM usuarios where usuarios.usser='$usuario' and usuarios.password='$contraseña' and usuarios.id_rol='1'";

    $resultado=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
      header("location:home_admin.php");
    }else{
      include("admin.php");
      ?>
    <center><h1><?php echo"ERROR EN LA AUTENTIFICACION".$conexion->error;
    }

    $conexion->close();
    ?></h1>
    </center>
  </body>
</html>
