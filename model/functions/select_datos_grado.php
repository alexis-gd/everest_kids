<?php
// LICENCIATURA
function obtenerDatosLic(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $sql_datos_lic = "SELECT formato, id_duracion, inicio_clases FROM catalogo_carreras WHERE grado = 'Licenciatura' AND status = '1'";
	$res_dl = mysqli_query($conexion, $sql_datos_lic);
  $array_dl = mysqli_fetch_assoc($res_dl);

  return $array_dl;
  mysqli_close($conexion);
}
function obtenerDatosDurLic(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $sql_datos_dur_lic = "SELECT * FROM catalogo_carreras_duracion WHERE grado = 'Licenciatura'";
	$res_ddl = mysqli_query($conexion, $sql_datos_dur_lic);

  $res = '';
    while($fila_ddl = mysqli_fetch_assoc($res_ddl)){
      $res .= '<div class="img-txt-oferta"><img src="assets/multimedia/icons/i-duracion.svg" alt="icono duración"> <b
      class="yell pr-1">Duración </b>'.$fila_ddl['duracion'].'</div>';
    }
  $res .= '';
  
  return $res;
  mysqli_close($conexion);
}
function obtenerCarrerasLic(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $select_lic = "SELECT carrera, url, num_carrera FROM catalogo_carreras WHERE status = '1' AND grado = 'Licenciatura' ORDER BY carrera ASC";
	$res_lic = mysqli_query($conexion, $select_lic);

  $res = '';
  while($fila = mysqli_fetch_array($res_lic)){
    $lic_replaced = str_replace("Licenciatura en ", "", $fila['carrera']);
    $res .= '<a href="'.$fila['url'].'" target="_blank" class="a-link"><p class="col-oferta-2-p"><span class="img-vineta"></span>'.$lic_replaced.'</p></a>';
  }	
  
  return $res;
  mysqli_close($conexion);
}

// MAESTRÍA
function obtenerDatosMae(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $sql_datos_mae = "SELECT formato, id_duracion, inicio_clases FROM catalogo_carreras WHERE grado = 'Maestría' AND status = '1'";
	$res_dm = mysqli_query($conexion, $sql_datos_mae);
  $array_dm = mysqli_fetch_assoc($res_dm);

  return $array_dm;
  mysqli_close($conexion);
}
function obtenerDatosDurMae(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $sql_datos_dur_mae = "SELECT * FROM catalogo_carreras_duracion WHERE grado = 'Maestría'";
	$res_ddm = mysqli_query($conexion, $sql_datos_dur_mae);

  $res = '';
    while($fila_ddm = mysqli_fetch_assoc($res_ddm)){
      $res .= '<div class="img-txt-oferta"><img src="assets/multimedia/icons/i-duracion.svg" alt="icono duración"> <b
      class="yell pr-1">Duración </b>'.$fila_ddm['duracion'].'</div>';
    }
  $res .= '';
  
  return $res;
  mysqli_close($conexion);
}
function obtenerCarrerasMae(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $select_mae = "SELECT carrera, url, num_carrera FROM catalogo_carreras WHERE status = '1' AND grado = 'Maestría' ORDER BY carrera ASC";
	$res_mae = mysqli_query($conexion, $select_mae);

  $res = '';
  while($fila = mysqli_fetch_array($res_mae)){
    $mae_replaced = str_replace("Maestría en ", "", $fila['carrera']);
    $res .= '<a href="'.$fila['url'].'" target="_blank" class="a-link"><p class="col-oferta-2-p"><span class="img-vineta"></span>'.$mae_replaced.'</p></a>';
  }	
  
  return $res;
  mysqli_close($conexion);
}

// MAESTRÍA
function obtenerDatosDoc(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $sql_datos_doc = "SELECT formato, id_duracion, inicio_clases FROM catalogo_carreras WHERE grado = 'Doctorado' AND status = '1'";
	$res_dd = mysqli_query($conexion, $sql_datos_doc);
  $array_dd = mysqli_fetch_assoc($res_dd);

  return $array_dd;
  mysqli_close($conexion);
}
function obtenerDatosDurDoc(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $sql_datos_dur_doc = "SELECT * FROM catalogo_carreras_duracion WHERE grado = 'Doctorado'";
	$res_ddd = mysqli_query($conexion, $sql_datos_dur_doc);

  $res = '';
    while($fila_ddd = mysqli_fetch_assoc($res_ddd)){
      $res .= '<div class="img-txt-oferta"><img src="assets/multimedia/icons/i-duracion.svg" alt="icono duración"> <b
      class="yell pr-1">Duración </b>'.$fila_ddd['duracion'].'</div>';
    }
  $res .= '';
  
  return $res;
  mysqli_close($conexion);
}
function obtenerCarrerasDoc(){
  include_once 'model/server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

  $select_doc = "SELECT carrera, url, num_carrera FROM catalogo_carreras WHERE status = '1' AND grado = 'Doctorado' ORDER BY carrera ASC";
	$res_doc = mysqli_query($conexion, $select_doc);

  $res = '';
  while($fila = mysqli_fetch_array($res_doc)){
    $doc_replaced = str_replace("Doctorado en ", "", $fila['carrera']);
    $res .= '<a href="'.$fila['url'].'" target="_blank" class="a-link"><p class="col-oferta-2-p"><span class="img-vineta"></span>'.$doc_replaced.'</p></a>';
  }	
  
  return $res;
  mysqli_close($conexion);
}
?>