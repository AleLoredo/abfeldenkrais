<?php 
include "includes/cbd.php";
include "includes/seguridad.php";


@$quees=$_POST["quees"];
@$paraque=$_POST["paraque"];
@$modalidades=$_POST["modalidades"];
@$paraquien=$_POST["paraquien"];

$sEditar="UPDATE contenidos SET quees='$quees', paraque='$paraque', modalidades='$modalidades', paraquien='$paraquien' WHERE id=1";
$rEditar = mysql_query($sEditar,$conexion);

header ("location: preguntasfrecuentes.php?uid=1&amp;nocache=" . time() );

?>