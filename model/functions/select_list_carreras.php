<?php
function obtenerCarreras(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $select_lic = "SELECT carrera, num_carrera FROM catalogo_carreras WHERE status = '1' AND grado = 'Licenciatura' ORDER BY carrera ASC";
	$res_lic = mysqli_query($conexion, $select_lic);
  $select_mae = "SELECT carrera, num_carrera FROM catalogo_carreras WHERE status = '1' AND grado = 'Maestría' ORDER BY carrera ASC";
	$res_mae = mysqli_query($conexion, $select_mae);
  $select_doc = "SELECT carrera, num_carrera FROM catalogo_carreras WHERE status = '1' AND grado = 'Doctorado' ORDER BY carrera ASC";
	$res_doc = mysqli_query($conexion, $select_doc);

	$lista = '<option value="0">Carrera de interés</option>';
  
  $lista .= '<optgroup label="Licenciaturas">';
  	while($fila = mysqli_fetch_array($res_lic)){
      $lic = $fila['num_carrera'];
      $lic_replaced = str_replace("Licenciatura en ", "", $fila['carrera']);
  		$lista .= "<option value='$lic/$lic_replaced'>$lic_replaced</option>";
  	}	
  $lista .= '</optgroup>';
  $lista .= '<optgroup label="Maestrías">';
  	while($fila = mysqli_fetch_array($res_mae)){
      $mae = $fila['num_carrera'];
      $mae_replaced = str_replace("Maestría en ", "", $fila['carrera']);
  		$lista .= "<option value='$mae/$mae_replaced'>$mae_replaced</option>";
  	}	
  $lista .= '</optgroup>';
  $lista .= '<optgroup label="Doctorados">';
  	while($fila = mysqli_fetch_array($res_doc)){
      $doc = $fila['num_carrera'];
      $doc_replaced = str_replace("Doctorado en ", "", $fila['carrera']);
  		$lista .= "<option value='$doc/$doc_replaced'>$doc_replaced</option>";
  	}	
  $lista .= '</optgroup>';

  return $lista;
  mysqli_close($conexion);
}
echo obtenerCarreras();
?>