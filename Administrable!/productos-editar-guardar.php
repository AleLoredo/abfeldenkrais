<?php 
include "includes/cbd.php";
include "includes/seguridad.php";



@$horario_1=$_POST["horario_1"];
@$horario_2=$_POST["horario_2"];
@$horario_3=$_POST["horario_3"];
@$horario_4=$_POST["horario_4"];
@$horario_5=$_POST["horario_5"];
@$horario_6=$_POST["horario_6"];
@$horario_7=$_POST["horario_7"];
@$horario_8=$_POST["horario_8"];
@$horario_9=$_POST["horario_9"];
@$horario_10=$_POST["horario_10"];

@$honorarios_1=$_POST["honorarios_1"];
@$honorarios_2=$_POST["honorarios_2"];
@$honorarios_3=$_POST["honorarios_3"];
@$honorarios_4=$_POST["honorarios_4"];
@$honorarios_5=$_POST["honorarios_5"];
@$honorarios_6=$_POST["honorarios_6"];
@$honorarios_7=$_POST["honorarios_7"];
@$honorarios_8=$_POST["honorarios_8"];
@$honorarios_9=$_POST["honorarios_9"];
@$honorarios_10=$_POST["honorarios_10"];


$sEditar="UPDATE tblproductos SET horario_1='$horario_1', horario_2='$horario_2', horario_3='$horario_3', horario_4='$horario_4', horario_5='$horario_5', horario_6='$horario_6', horario_7='$horario_7', horario_8='$horario_8', horario_9='$horario_9', horario_10='$horario_10', honorarios_1='$honorarios_1', honorarios_2='$honorarios_2', honorarios_3='$honorarios_3', honorarios_4='$honorarios_4', honorarios_5='$honorarios_5', honorarios_6='$honorarios_6', honorarios_7='$honorarios_7', honorarios_8='$honorarios_8', honorarios_9='$honorarios_9', honorarios_10='$honorarios_10' WHERE id=1";
//echo $sEditar;
$rEditar = mysql_query($sEditar,$conexion);

header ("location: home.php?uid=1&amp;nocache=" . time() );

?>
