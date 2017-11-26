<?php 
include "includes/cbd.php";
include "includes/seguridad.php";

@$UID=$_POST["id"];
@$nombre=$_POST["nombre"];
@$apellido=$_POST["apellido"];
@$usuario=$_POST["usuario"];
@$clave=$_POST["clave"];

$sEditar="UPDATE tblusuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario', clave='$clave' WHERE id='$UID'";
$rEditar = mysql_query($sEditar,$conexion);

header ("location: usuarios.php?uid=1&amp;nocache=" . time() );

?>
