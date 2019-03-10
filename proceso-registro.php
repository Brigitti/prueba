<?php
require 'vendor/autoload.php';
$mongo = new MongoDB\Client("mongodb://localhost:27017");
$db = $mongo->theband;

if(isset($_POST['nombre'])){
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];

$insert[0]= $nombre;
$insert[1]= $apellidos;
$insert[2]= $edad;
$insert[3]= $direccion;

if(!empety($_POST['nombre']))
{
    
    $db->insertOne($insert);
}
else{
    echo "los datos no ha sido insertados";
 }
}
else{
    echo "Error";
}
?>