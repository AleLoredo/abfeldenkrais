<?php
include("includes/cbd.php");
$id = $_GET['id'];
$eliminar = $_POST['eliminar'];
$rand = mt_rand();

foreach((array)$eliminar as $val) {
    unlink('uploads/'.$id.'/'.$val);
}

header ("location: fotos.php?id=".$id."&nc=".$rand);

?>