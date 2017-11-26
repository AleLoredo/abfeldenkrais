<?php 
include "includes/cbd.php";
include "includes/seguridad.php";

@$UID=$_GET["uid"];

$sEliminar="DELETE FROM tblusuarios WHERE id='$UID'";
$rEliminar = mysql_query($sEliminar,$conexion);

header ("location: usuarios.php?uid=1&amp;nocache=" . time() );

?>
