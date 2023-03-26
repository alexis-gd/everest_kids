<?php
 include_once 'model/server/conexion.php';
 $conexion = conectar();
 $conexion->set_charset('utf8');
   $sql_banner = "SELECT * FROM banners_web ORDER BY id ASC";
   $res_banner = mysqli_query($conexion, $sql_banner);
   $i = 0;
   $img_banner = "";
   $alt_banner = "";
   $intervalo_banner = "";
   while($fila_banner = mysqli_fetch_array($res_banner)){
     $i ++; 
        $img_banner .= ''.$fila_banner['url_img'].'#/';
        $alt_banner .= ''.$fila_banner['alt'].'#/';
        $intervalo_banner .= ''.$fila_banner['intervalo'].'#/';
  }
  $img_banner = explode("#/",$img_banner);
  $alt_banner = explode("#/",$alt_banner);
  $intervalo_banner = explode("#/",$intervalo_banner);

  mysqli_close($conexion);
?>