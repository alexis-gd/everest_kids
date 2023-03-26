<?php
  include './model/server/conexion.php'; 
    $conexion = conectar(); 
    $conexion->set_charset('utf8');

    $consulta2 = "SELECT * FROM versiones WHERE id = '1'";
    $resultado2 = mysqli_query($conexion, $consulta2);
    $array2 = mysqli_fetch_array($resultado2);
    $v = $array2['principal'];
?>