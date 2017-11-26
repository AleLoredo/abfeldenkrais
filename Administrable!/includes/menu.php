<ul id="nav">
<?php 
$archivo = array_pop(explode('/', $_SERVER['PHP_SELF']));
 ?>
    <li <?php if ($archivo == 'home.php'){ ?> class="active"<?php } ?>>
    	<a href="home.php?uid=1&amp;nocache=<?php echo time(); ?>">Horarios</a></li>
    	<li <?php if ($archivo == 'elmetodo.php'){ ?> class="active"<?php } ?>>
    	<a href="elmetodo.php?uid=1&amp;nocache=<?php echo time(); ?>">El Método</a></li>
    <li <?php if ($archivo == 'preguntasfrecuentes.php'){ ?> class="active"<?php } ?>>
    	<a href="preguntasfrecuentes.php?uid=1&amp;nocache=<?php echo time(); ?>">Preguntas Frecuentes</a></li>
    	    <li <?php if ($archivo == 'fotos.php'){ ?> class="active"<?php } ?>>
    	<a href="fotos.php?uid=1&amp;nocache=<?php echo time(); ?>">Fotos</a></li>
   <li <?php if ($archivo == 'usuarios.php'){ ?> class="active"<?php } ?>>
   	<a href="usuarios.php?nocache=<?php echo time(); ?>">Usuarios</a></li>
  </ul>