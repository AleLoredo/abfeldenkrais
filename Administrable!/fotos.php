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

<!DOCTYPE html>
<html id="ng-app" ng-app="app" lang="es">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title><?php echo $CLIENTE . ' - '; ?>Panel de Administraci&oacute;n</title>
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie6_or_less.css" />
<![endif]-->
<script type="text/javascript" src="js/common.js"></script>

<style type="text/css"> 
  

.col-sm-3 {border: solid 1px #000;  padding: 20px;}
</style>



 <script type="text/JavaScript">
<!--
function myF(targ,selObj,restore){
  eval(targ+".location='"+'?seccion=<?php echo $seccion; ?>&categoria='+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/multifilter.js"></script>

        <script src="http://nervgh.github.io/js/es5-sham.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="js/console-sham.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
        <!--<script src="../bower_components/angular/angular.js"></script>-->
        <script src="http://code.angularjs.org/1.1.5/angular.min.js"></script>
        <script src="js/angular-file-upload.min.js"></script>
        
        <style>
            .my-drop-zone { border: dotted 3px lightgray; }
            .nv-file-over { border: dotted 3px red; } /* Default class applied to drop zones on over */
            .another-file-over-class { border: dotted 3px green; }
            html, body { height: 100%; }
        </style>
</head>
<body  ng-controller="AppController" nv-file-drop="" uploader="uploader" filters="queueLimit, customFilter">
<div id="wrap">
  <div id="header">
<div id="site-name"><?php echo $CLIENTE . ' - '; ?>Panel de Administraci&oacute;n</div>
  <?php   include "includes/menu.php";   ?>
  </div>
  <div id="content-wrap">
    <div id="content">

   <div class="row">
    <div class="col-sm-12">
     <h2>Fotos</h2>
    </div>
</div>              
<div class="row">
  <div class="col-sm-12">
    <?php

echo '

<br><br>
<form action="fotos_eliminar.php?id='.$id.'&nc='.$rand.'" class="" method="POST" role="form">
';

$carpeta = 'uploads';
if (is_dir($carpeta))
{
  if ($handle = opendir($carpeta))
  {
          //Notice the parentheses I added:
          while(($file = readdir($handle)) !== FALSE)
          {
                  $results_array[] = $file;
          }
          closedir($handle);
  }
}
sort($results_array);
foreach($results_array as $value)
{if($value != '.' && $value != '..' && $value != '.htaccess' && $value != '.htpasswd' && $value != 'index.php' && $value && substr($value, 0,1) != '.')
    {
      $archivo = preg_replace('/\\.[^.\\s]{3,4}$/', '', $value);
      if (@!in_array($archivo, $files_array))
      {
        echo '<div class="col-sm-3"><img src="uploads/'.$value.'" class="admin-thumbs" width="100%"><br>
        <br>
<input type="checkbox" name="eliminar[]" value="'.$value.'">Eliminar
</div>';
      }
    }
}
echo '
<div class="clearfix"></div>
<div class="col-sm-12">
<input type="submit" class="btn btn-default pull-right" value="Eliminar seleccionados">
<a href="fotos_subir.php?id='.$id.'&nc='.$rand.'" class="btn btn-default pull-right">Agregar fotos</a>
</div>
</form>';
  ?>
  </div>
</div>
      <div id="footer">
      <p>Bienvenido <?php echo $_SESSION['usuariocompleto']; ?></p>
      <p><a href="usuario-cambiarclave.php?nocache=<?php echo time(); ?>">Cambiar Clave</a> | <a href="logout.php">Logout</a> </p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>