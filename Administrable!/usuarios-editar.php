<?php 
include "includes/cbd.php";
include "includes/seguridad.php";

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

@$UID=$_GET["uid"];

$sBusqueda="SELECT * FROM tblusuarios WHERE id='$UID'";
$rBusqueda = mysql_query($sBusqueda,$conexion);
$Busqueda=mysql_fetch_array($rBusqueda);

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
		 
			
			<form action="usuarios-editar-guardar.php" method="post"><table class="table1">
			<thead>
				<tr>
				<th colspan="2">Edici&oacute;n de Usuario</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				  <th class="sub">ID</th>
				  <td><input name="id" type="text" id="id" value="<?php echo $UID; ?>" size="10" maxlength="10" readonly="readonly" /></td>
			  </tr>
				<tr>
				<th width="50" class="sub">Nombre</th>
				<td><input name="nombre" type="text" id="nombre" value="<?php echo $Busqueda["nombre"]; ?>" size="100" maxlength="100" /></td>

			  </tr>
				<tr>
				<th width="50" class="sub">Apellido</th>
				<td><input name="apellido" type="text" id="apellido" value="<?php echo $Busqueda["apellido"]; ?>" size="100" maxlength="100" /></td>

			  </tr>
				<tr>
				  <th class="sub">Usuario</th>
				  <td><input name="usuario" type="text" id="usuario" value="<?php echo $Busqueda["usuario"]; ?>" size="100" maxlength="100" /></td>
			  </tr>
				<tr>
				  <th class="sub">Clave</th>
				  <td><input name="clave" type="password" id="clave" value="<?php echo $Busqueda["clave"]; ?>" size="100" maxlength="100" /></td>
			  </tr>
				<tr>
				  <th class="sub">&nbsp;</th>
				  <td><input type="submit" name="guardar" id="guardar" value="Guardar" /></td>
			  </tr>
			</tbody>
	    </table></form>
			
            <p><a href="usuarios.php?nocache=<?php echo time(); ?>"><img src="images/volver.png" /></a></p>
            
  <hr />	
			<div id="footer">
			<p>Bienvenido <?php echo $_SESSION['usuariocompleto']; ?></p>
			<p><a href="usuario-cambiarclave.php?nocache=<?php echo time(); ?>">Cambiar Clave</a> | <a href="logout.php">Logout</a> </p>
			</div>
		
		</div>
		
	</div>

</div>
</body>
</html>
