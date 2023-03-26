<?php
function conectar(){
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
// $user_db = "educac16_root";
// $pass_db = "EveresT2018";
$db_name = "educac16_everest";

$con= new mysqli($host_db, $user_db, $pass_db, $db_name); 
if ($con->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
} else {
    return $con;
}
}