<?php
include ("conexion.php");

if (isset($_POST['centro'])) {
    $centroSeleccionado = $_POST['centro']; 
}

if (isset($_POST['ubicacion'])) {
    $ubicacioni = $_POST['ubicacion']; 
}

if (isset($_POST['sede'])) {
    $sedei = $_POST['sede']; 
}

if (isset($_POST['nameinve'])) {
    $textoIngresado = $_POST['nameinve'];
}
$sql = "SELECT * FROM inventario WHERE nom_inventario='$nameInve'";
$resultado1 = $conexion->query($sql);

if ($resultado1->num_rows => 1){
    $sql1 = "INSERT INTO inventario (nom_inventario, id_sede_id, id_centroid, id_ubicacion_id) 
    VALUES ('$textoIngresado', '$sedei', '$centroSeleccionado', $ubicacioni)";

    header("location:inventario.php");
}


?>