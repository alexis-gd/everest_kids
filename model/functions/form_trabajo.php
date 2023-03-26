<?php 
  include_once '../server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');

    $trabajo = sanitizar($conexion, $_POST['trabajo']);
    $nombre = sanitizar($conexion, $_POST['nombre_bt']);
    $correo = sanitizar($conexion, $_POST['correo_bt']);
    $telefono = sanitizar($conexion, $_POST['telefono_bt']);


    if (repetido($correo,$conexion)==1){        
            $respuesta = 0;
    } else {
            $sql="INSERT INTO bolsa_trabajo_interesados (trabajo,nombre,correo,telefono,fecha,status)
            values ('$trabajo','$nombre','$correo','$telefono',NOW(),1)";
            $resultado = mysqli_query($conexion,$sql);
            $respuesta = 1;            
    }

    function repetido($correo,$conexion){
        $sql = "SELECT correo FROM bolsa_trabajo_interesados WHERE correo = '$correo'";
        $res=mysqli_query($conexion,$sql);

        if (mysqli_num_rows($res)>0) {
            // si esta repetido es uno //si no es numero es uno
            return 1;
        }else {
            return 0;
        }
    }
    function sanitizar($conexion, $var){
      $var = mysqli_real_escape_string($conexion, $var);
      $var = filter_var($var, FILTER_SANITIZE_STRING);
      return $var;
    }

    $data = array("$respuesta");  
    echo json_encode($data);    
    mysqli_close($conexion);
 ?>