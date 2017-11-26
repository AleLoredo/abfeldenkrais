<?php 
include "includes/cbd.php";
include "includes/seguridad.php";

@$nombre=$_POST["nombre"];
@$apellido=$_POST["apellido"];
@$usuario=$_POST["usuario"];
@$clave=$_POST["clave"];

$sNuevo="INSERT INTO tblusuarios (nombre, apellido, usuario, clave) VALUES ('$nombre', '$apellido', '$usuario', '$clave')";
$rNuevo = mysql_query($sNuevo,$conexion);

header ("location: usuarios.php?uid=1&amp;nocache=" . time() );

?>
