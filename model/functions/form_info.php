<?php
// Ingresa tu clave secreta.....
define("RECAPTCHA_V3_SECRET_KEY", '6Le6E8EZAAAAAL2YG4MRIrSoaB9mZOjVKVG3tMlp');

$token = $_POST['token'];
$action = $_POST['action'];

// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
// var_dump($arrResponse);
// verificar la respuesta

function repetido($correo,$numero,$conexion){
  $sql = "SELECT c_correo from contacto where c_correo = '$correo'";
  $res=mysqli_query($conexion,$sql);

  if (mysqli_num_rows($res)>0 || !is_numeric($numero)) {
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

if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
  include_once '../server/conexion.php';
  $conexion = conectar();
	$conexion->set_charset('utf8');
    // Si entra aqui, es un humano, puedes procesar el formulario

    $carrera = sanitizar($conexion, $_POST['carrera']);
    $nombre = sanitizar($conexion, $_POST['nombre']);
    $correo = sanitizar($conexion, $_POST['correo']);
    $numero = sanitizar($conexion, $_POST['numero']);
    $codigo = mb_strtoupper(sanitizar($conexion, $_POST['codigo']));

    $splited = explode("/", $carrera);

    if (repetido($correo,$numero,$conexion)==1){        
            $respuesta = 0;
    } else {
            $sql="INSERT into contacto (c_carrera,c_nombre,c_correo,c_numero,codigo,num_carrera,registered)
            values ('$splited[1]','$nombre','$correo','$numero','$codigo','$splited[0]',NOW())";
            $resultado = mysqli_query($conexion,$sql);

            //Envio de Correo
            $from = "informacion@educacioneverest.com";
            /*-- para agregar un correo mas de envio $to = "$correo,katche4@gmail.com"; --*/
            // $to = 'alexisgarcia@educacioneverest.com'; 
            $to = 'asesoracademico@educacioneverest.com'; 
            $subject = "Solicitud de Información";
            $message = '
            <b>Interesado: </b>'.$nombre.' <br><br>
            <b>Carrera de interés: </b>'.$splited[1].' <br><br>
            <b>Correo: </b>'.$correo.' <br><br>
            <b>Teléfono: </b>'.$numero.' <br><br>';
            $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: Solicitud de información <informacion@educacioneverest.com>' . "\r\n"; 

            mail($to,$subject,$message, $headers);   
            $respuesta = 1;
            
    }


    $data = array("$respuesta");  
    echo json_encode($data);    
    mysqli_close($conexion);

  } else {
    // Si entra aqui, es un robot....
    echo "Lo siento, parece que eres un Robot";
}

 ?>