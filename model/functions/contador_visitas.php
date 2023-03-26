<?php
  include_once 'model/server/conexion.php';
  $conexion = conectar();


  $ip = $_SERVER['REMOTE_ADDR'];
  $sql_Select = $conexion->query("SELECT * FROM contador_visitas WHERE ip = '$ip' ORDER BY id DESC");
  $sql_Total= $conexion->query("SELECT * FROM contador_visitas ORDER BY id DESC LIMIT 1");
  $array_Total = $sql_Total->fetch_array();
  $totales = $array_Total['totales'] + 1;
  $fechaActualSola = date("Y-m-d");
  $numRow = $sql_Select->num_rows;
  // Nueva vista nueva ip
  if ($numRow == 0) {
    $sql_Insert = $conexion->query("INSERT INTO contador_visitas (ip, fecha_completa, totales, fecha) VALUES ('$ip', NOW(), '$totales', '$fechaActualSola')");
  }else {
    // Nueva vista misma ip
    $array = $sql_Select->fetch_array();
    $fechaPrimerRegistro = $array['fecha_completa'];
    $fechaActual = date("Y-m-d H:i:s");
    $fechaLimite = strtotime($fechaPrimerRegistro."+ 5 minutes");
    $fechaLimite = date("Y-m-d H:i:s", $fechaLimite);
    if ($fechaActual >= $fechaLimite) {
      $sql_Insert = $conexion->query("INSERT INTO contador_visitas (ip, fecha_completa, totales, fecha) VALUES ('$ip', NOW(), '$totales', '$fechaActualSola')");
    }
    // Vistas mensuales
    $fecha_mia = explode("-", $fechaActualSola);
    $sql_vistas_mes = $conexion->query("SELECT COUNT(fecha) FROM contador_visitas WHERE MONTH(fecha) = $fecha_mia[1]");
    $show = mysqli_fetch_assoc($sql_vistas_mes);
    mysqli_close($conexion);
  }
?>