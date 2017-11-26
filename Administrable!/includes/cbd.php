<?php
$CLIENTE="Feldenkrais";

$dbhost="localhost";
$dbusuario="alicia";
$dbpassword="felden2017";
$db="alicia_felden";

$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
mysql_select_db($db, $conexion);

//Normalizo BD para Caracteres UTF8
mysql_query("SET NAMES 'utf8'");


$ruta_global="/";
//$ruta_global="/JUGUETERIA/";
global $ruta_global;

//date_default_timezone_set('America/Buenos_Aires');

?>