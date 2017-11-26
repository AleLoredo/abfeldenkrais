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
  
  <!-- ANGULAR FILE UPLOADER -->
        <!-- Fix for old browsers -->
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

    <form action="elmetodo-guardar.php" method="post"><table class="table1">


<?php

$id = $_GET['id'];

?>

<script>

'use strict';





angular





    .module('app', ['angularFileUpload'])





    .controller('AppController', ['$scope', 'FileUploader', function($scope, FileUploader) {

        var uploader = $scope.uploader = new FileUploader({

            url: 'upload.php?id=<?php echo $id; ?>'

        });



        // FILTERS



        uploader.filters.push({

            name: 'customFilter',

            fn: function(item /*{File|FileLikeObject}*/, options) {

                return this.queue.length < 100;

            }

        });



        // CALLBACKS



        uploader.onWhenAddingFileFailed = function(item /*{File|FileLikeObject}*/, filter, options) {

            console.info('onWhenAddingFileFailed', item, filter, options);

        };

        uploader.onAfterAddingFile = function(fileItem) {

            console.info('onAfterAddingFile', fileItem);

        };

        uploader.onAfterAddingAll = function(addedFileItems) {

            console.info('onAfterAddingAll', addedFileItems);

        };

        uploader.onBeforeUploadItem = function(item) {

            console.info('onBeforeUploadItem', item);

        };

        uploader.onProgressItem = function(fileItem, progress) {

            console.info('onProgressItem', fileItem, progress);

        };

        uploader.onProgressAll = function(progress) {

            console.info('onProgressAll', progress);

        };

        uploader.onSuccessItem = function(fileItem, response, status, headers) {

            console.info('onSuccessItem', fileItem, response, status, headers);

        };

        uploader.onErrorItem = function(fileItem, response, status, headers) {

            console.info('onErrorItem', fileItem, response, status, headers);

        };

        uploader.onCancelItem = function(fileItem, response, status, headers) {

            console.info('onCancelItem', fileItem, response, status, headers);

        };

        uploader.onCompleteItem = function(fileItem, response, status, headers) {

            console.info('onCompleteItem', fileItem, response, status, headers);

        };

        uploader.onCompleteAll = function() {

            console.info('onCompleteAll');

        };



        console.info('uploader', uploader);

    }]);



</script>

<div class="row">

    <div class="col-sm-12 col-md-12">

     <h2>Agregar Fotos</h2>

    </div>

</div>              


<div class="row">

  <div class="col-sm-12 col-md-12">

<div class="container">

            <div class="row">



                <div class="col-md-4">



                    <h3>Seleccionar fotos</h3>



                    <div ng-show="uploader.isHTML5">

                        <!-- 3. nv-file-over uploader="link" over-class="className" -->

                        <div class="well my-drop-zone" nv-file-over="" uploader="uploader">

                            Tirar fotos aqu&iacute;

                        </div>



                    </div>



                    <!-- Example: nv-file-select="" uploader="{Object}" options="{Object}" filters="{String}" -->

                    Multiple

                    <input type="file" nv-file-select="" uploader="uploader" multiple  /><br/>



                </div>



                <div class="col-md-8" style="margin-bottom: 40px">



                    <h3>Archivos en cola</h3>

                    <p>Cantidad: {{ uploader.queue.length }}</p>



                    <table class="table">

                        <thead>

                            <tr>

                                <th width="50%">Nombre</th>

                                <th ng-show="uploader.isHTML5">Tama&ntilde;o</th>

                                <th ng-show="uploader.isHTML5">Progreso</th>

                                <th>Status</th>

                                <th>Acciones</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr ng-repeat="item in uploader.queue">

                                <td><strong>{{ item.file.name }}</strong></td>

                                <td ng-show="uploader.isHTML5" nowrap>{{ item.file.size/1024/1024|number:2 }} MB</td>

                                <td ng-show="uploader.isHTML5">

                                    <div class="progress" style="margin-bottom: 0;">

                                        <div class="progress-bar" role="progressbar" ng-style="{ 'width': item.progress + '%' }"></div>

                                    </div>

                                </td>

                                <td class="text-center">

                                    <span ng-show="item.isSuccess"><i class="glyphicon glyphicon-ok"></i></span>

                                    <span ng-show="item.isCancel"><i class="glyphicon glyphicon-ban-circle"></i></span>

                                    <span ng-show="item.isError"><i class="glyphicon glyphicon-remove"></i></span>

                                </td>

                                <td nowrap>

                                    <button type="button" class="btn btn-success btn-xs" ng-click="item.upload()" ng-disabled="item.isReady || item.isUploading || item.isSuccess">

                                        <span class="glyphicon glyphicon-upload"></span> Subir

                                    </button>

                                    <button type="button" class="btn btn-warning btn-xs" ng-click="item.cancel()" ng-disabled="!item.isUploading">

                                        <span class="glyphicon glyphicon-ban-circle"></span> Cancelar

                                    </button>

                                    <button type="button" class="btn btn-danger btn-xs" ng-click="item.remove()">

                                        <span class="glyphicon glyphicon-trash"></span> Remover

                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>



                    <div>

                        <div>

                            Progreso:

                            <div class="progress" style="">

                                <div class="progress-bar" role="progressbar" ng-style="{ 'width': uploader.progress + '%' }"></div>

                            </div>

                        </div>

                        <button type="button" class="btn btn-success btn-s" ng-click="uploader.uploadAll()" ng-disabled="!uploader.getNotUploadedItems().length">

                            <span class="glyphicon glyphicon-upload"></span> Subir todas

                        </button>

                        <button type="button" class="btn btn-warning btn-s" ng-click="uploader.cancelAll()" ng-disabled="!uploader.isUploading">

                            <span class="glyphicon glyphicon-ban-circle"></span> Cancelar todas

                        </button>

                        <button type="button" class="btn btn-danger btn-s" ng-click="uploader.clearQueue()" ng-disabled="!uploader.queue.length">

                            <span class="glyphicon glyphicon-trash"></span> Remover todas

                        </button>

                    </div>



                </div>



            </div>

          </div>

        </div>

  </div>

</div>
            </form>
      
            
    
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