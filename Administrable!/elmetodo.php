<?php 
include "includes/cbd.php";
include "includes/seguridad.php";

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

@$UID=1;

$sBusqueda="SELECT * FROM contenidos WHERE id=1";
$rBusqueda = mysql_query($sBusqueda,$conexion);
$Busqueda=mysql_fetch_array($rBusqueda);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
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

    <form action="elmetodo-guardar.php" method="post"><table class="table1">



      <div id="sample">
  <script type="text/javascript" src="includes/nicEdit-latest.js"></script> 
  <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>

  <h4>El Método</h4>
  <textarea name="elmetodo" id="elmetodo" style="width: 100%;">
      <?php echo $Busqueda['elmetodo']; ?>
</textarea><br />
  
<input type="submit" name="guardar" id="guardar" value="Guardar" />
      
            </form>
      
            
    
      <div id="footer">
      <p>Bienvenido <?php echo $_SESSION['usuariocompleto']; ?></p>
      <p><a href="usuario-cambiarclave.php?nocache=<?php echo time(); ?>">Cambiar Clave</a> | <a href="logout.php">Logout</a> </p>
      </div>
    </div>
  </div>
</div>
</body>
</html>