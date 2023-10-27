<?php

$cc=$_POST['cc'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['nombre']=$nombre;

include "conexion.php";



$consulta="SELECT*FROM usuarios where cc='$cc' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:inventario.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);






<?php

  $cc = $_POST['cc'];
  $contrasena = $_POST['contrasena'];
  session_start();

  include "conexion.php";

  // Escapa los datos para prevenir inyección SQL
  $cc = mysqli_real_escape_string($conexion, $cc);
  $contrasena = mysqli_real_escape_string($conexion, $contrasena);

  $consulta = "SELECT * FROM usuarios WHERE cc='$cc' AND contrasena='$contrasena'";
  $resultado = mysqli_query($conexion, $consulta);

  if (!$resultado) {
      die("Error en la consulta: " . mysqli_error($conexion));
  }

  $filas = mysqli_num_rows($resultado);

  if ($filas) {
      $_SESSION['cc'] = $cc;
      header("location: inventario.php");
  } else {
      include("index.html");
      echo "<h1 class='bad'>ERROR DE AUTENTIFICACION</h1>";
  }

  mysqli_free_result($resultado);
  mysqli_close($conexion);
?>
