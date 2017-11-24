<?php $schema = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";?> 
 
 <!--va luego de la section class="posts col-md-9" que es la fila para contenido principales  -->
  	<div class="migas-de-pan"><!--inicio class posts col para migas, las 3 col restantes son para el sidebar   -->
         <ol class="breadcrumb">
            <li><a href="<?php echo $schema.$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] ?>/catac/index.php">Inicio</a></li>
            <li><a href="<?php echo $schema.$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] ?>/catac/quienes.php">¿Quiénes Somos?</a></li>
            <li><a href="#">Fenómenos</a></li>
            <li class="active">Monitoreo en tiempo real</li>
         </ol>
     </div> <!--fin div migas-de-pan-->