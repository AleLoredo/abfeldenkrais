<?php 
include "includes/cbd.php";
include "includes/seguridad.php";

@$UID=$_POST["id"];

@$clave=$_POST["clave"];

$sEditar="UPDATE tblusuarios SET clave='$clave' WHERE id='$UID'";
$rEditar = mysql_query($sEditar,$conexion);

header ("location: logout.php?nocache=" . time() );

?>
