<?php 
include "includes/cbd.php";
include "includes/seguridad.php";

@$elmetodo=$_POST["elmetodo"];

$sEditar="UPDATE contenidos SET elmetodo='$elmetodo' WHERE id='1'";
$rEditar = mysql_query($sEditar,$conexion);

header ("location: elmetodo.php?uid=1&amp;nocache=" . time() );

?>