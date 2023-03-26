<?php
 include_once 'model/server/conexion.php';
 $conexion = conectar();
 $conexion->set_charset('utf8');
   $sql = "SELECT * FROM bolsa_trabajo WHERE status = '1'";
   $res = mysqli_query($conexion, $sql);
   $i = 0;
   while ($array = mysqli_fetch_assoc($res)) {
    $i ++;  
    $div = '<div class="custom-control custom-radio">
            <input type="radio" id="trabajo'.$i.'" name="trabajo" class="custom-control-input" value="'.$array['id_trabajo'].'">
            <label class="custom-control-label" for="trabajo'.$i.'">'.$array['trabajo'].'</label>
            </div>';
    echo $div;
   }
  mysqli_close($conexion);
?>