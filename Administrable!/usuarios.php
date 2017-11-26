<?php 
include "includes/cbd.php";
include "includes/seguridad.php";

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $CLIENTE . ' - '; ?>Panel de Administraci&oacute;n</title>
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie6_or_less.css" />
<![endif]-->
<script type="text/javascript" src="js/common.js"></script>
</head>
<body id="type-a">
<div id="wrap">

	<div id="header">
    <div id="site-name"><?php echo $CLIENTE . ' - '; ?>Panel de Administraci&oacute;n</div>
<?php   include "includes/menu.php";   ?>
	</div>
	
	<div id="content-wrap">
	
		<div id="content">
		  <div class="featurebox">
		    <h3>Usuarios del Sistema</h3>
		    <p>En esta sección se administran los usuarios.</p></div>
			<p><a href="usuarios-nuevo.php?nocache=<?php echo time(); ?>"><img src="images/nuevousuario.png" /></a></p>
            <hr />
			
			<table class="table1">
			<thead>
				<tr>
				<th colspan="5">Usuarios</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th width="50">ID</th>
				<th width="150">Nombre</th>
				<th width="150">Apellido</th>
				<th width="100">Usuario</th>
                <th width="100"></th>

			  </tr>
<?php
			$sBusqueda="SELECT * FROM tblusuarios WHERE visible=1 ORDER BY id ASC";
			$rBusqueda = mysql_query($sBusqueda,$conexion);
			while($Busqueda=mysql_fetch_array($rBusqueda)) {
?>			
            	<tr>
				<th class="sub"><?php echo $Busqueda['id']; ?></th>
				<td><?php echo $Busqueda['nombre']; ?></td>
				<td ><?php echo $Busqueda['apellido']; ?></td>
				<td ><?php echo $Busqueda['usuario']; ?></td>

                <td>
                	<a href="usuarios-editar.php?uid=<?php echo $Busqueda['id']; ?>&nocache=<?php echo time(); ?>" title="Editar"><img src="images/editar.png" /></a>
                 	<a href="usuarios-eliminar.php?uid=<?php echo $Busqueda['id']; ?>&nocache=<?php echo time(); ?>" title="Eliminar"><img src="images/eliminar.png" /></a>
                	
                 </td>
			  </tr>
				
<?php } ?>                
           
			</tbody>
			</table>
			
			<hr />	
			<div id="footer">
			<p>Bienvenido <?php echo $_SESSION['usuariocompleto']; ?></p>
			<p><a href="usuario-cambiarclave.php?uid=1&amp;nocache=<?php echo time(); ?>">Cambiar Clave</a> | <a href="logout.php">Logout</a> </p>
			</div>
		
		</div>
		
	</div>

</div>
</body>
</html>
