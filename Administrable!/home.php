<?php 
include "includes/cbd.php";
include "includes/seguridad.php";

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

@$UID=1;

$sBusqueda="SELECT * FROM tblproductos WHERE id=1";
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
    <form action="productos-editar-guardar.php" method="post"><table class="table1">
      <thead>
      <tr>
      <th>Horarios &amp; Honorarios</th>
      </tr>
      </thead>
      <tbody>
             <tr>
             <th>Horarios</th>
           </tr>   
          <td>
            <label for="dd"></label>
            <input type="text" name="horario_1" id="horario_1" value="<?php echo $Busqueda["horario_1"]; ?>" size="50" maxlength="30"></td>
        </tr>
             <td>
            <label for="dd"></label>
            <input type="text" name="horario_2" id="horario_2" value="<?php echo $Busqueda["horario_2"]; ?>" size="50" maxlength="30"></td>
        </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="horario_3" id="horario_3" value="<?php echo $Busqueda["horario_3"]; ?>" size="50" maxlength="30"></td>
        </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="horario_4" id="horario_4" value="<?php echo $Busqueda["horario_4"]; ?>" size="50" maxlength="30"></td>
        </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="horario_5" id="horario_5" value="<?php echo $Busqueda["horario_5"]; ?>" size="50" maxlength="30"></td>
        </tr>  

         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="horario_6" id="horario_6" value="<?php echo $Busqueda["horario_6"]; ?>" size="50" maxlength="30"></td>
        </tr> 
         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="horario_7" id="horario_7" value="<?php echo $Busqueda["horario_7"]; ?>" size="50" maxlength="30"></td>
        </tr> 

         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="horario_8" id="horario_8" value="<?php echo $Busqueda["horario_8"]; ?>" size="50" maxlength="30"></td>
        </tr> 
         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="horario_9" id="horario_9" value="<?php echo $Busqueda["horario_9"]; ?>" size="50" maxlength="30"></td>
        </tr> 
         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="horario_10" id="horario_10" value="<?php echo $Busqueda["horario_10"]; ?>" size="50" maxlength="30"></td>
        </tr>    
               

 <tr>
           
             <th>Honorarios</th>

           </tr>   
         
          <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_1" id="honorarios_1" value="<?php echo $Busqueda["honorarios_1"]; ?>" size="50" maxlength="30"></td>
        </tr>
             <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_2" id="honorarios_2" value="<?php echo $Busqueda["honorarios_2"]; ?>" size="50" maxlength="30"></td>
        </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_3" id="honorarios_3" value="<?php echo $Busqueda["honorarios_3"]; ?>" size="50" maxlength="30"></td>
        </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_4" id="honorarios_4" value="<?php echo $Busqueda["honorarios_4"]; ?>" size="50" maxlength="30"></td>
        </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_5" id="honorarios_5" value="<?php echo $Busqueda["honorarios_5"]; ?>" size="50" maxlength="30"></td>
        </tr>  

         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_6" id="honorarios_6" value="<?php echo $Busqueda["honorarios_6"]; ?>" size="50" maxlength="30"></td>
        </tr> 
         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_7" id="honorarios_7" value="<?php echo $Busqueda["honorarios_7"]; ?>" size="50" maxlength="30"></td>
        </tr> 

         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_8" id="honorarios_8" value="<?php echo $Busqueda["honorarios_8"]; ?>" size="50" maxlength="30"></td>
        </tr> 
         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_9" id="honorarios_9" value="<?php echo $Busqueda["honorarios_9"]; ?>" size="50" maxlength="30"></td>
        </tr> 
         </tr>
          <td>
            <label for="dd"></label>
            <input type="text" name="honorarios_10" id="honorarios_10" value="<?php echo $Busqueda["honorarios_10"]; ?>" size="50" maxlength="30"></td>
        </tr> 
 <tr>  
          <td><input type="submit" name="guardar" id="guardar" value="Guardar" /></td>
        </tr>
      </tbody>
    </table>
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