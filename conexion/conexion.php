<?php

$conexion = null;
$servidor = 'localhost';
$bd = 'nogales';
$user = 'root';
$pass = 'root';

try{
    $conexion = new PDO('mysql:host='.$servidor.';dbname='.$bd, $user, $pass, 
                        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch(PDOException $error){
    echo "No se ha establecido conexión";
    exit;
}
return $conexion;
?>