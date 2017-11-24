 
 <header>
  <!-- Aca se agrega un nav para poder crear el menu de navegacion de la página -->
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">

      <div class="container">
            <div class="navbar-header"><!-- boton para mostrar y ocultar el menú en dispositivos móviles -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-geo" aria-expended="false" aria-controls="navbar">
                  <span class="sr-only">Desplegar / Ocultar menu</span><!-- se vera solo para dispositivos moviles -->
                  <span class="icon-bar"></span> <!-- se triplica class="icon-bar" -->
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- <a href="#" class="navbar-brand">Principal</a> -->
            </div>
            <!-- inicia menu top -->

            <div class="collapse navbar-collapse" id="navegacion-geo">
            <?php $schema = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";?> 
 
                <ul class="nav navbar-nav"><!-- inicio lista menu top --> 
                    <li class="active"><a href="<?php echo $schema.$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] ?>/catac/index.php">Inicio</a></li> 
                   <li><a href="<?php echo $schema.$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] ?>/catac/quienes.php">¿Quiénes Somos?</a></li>             
                    <li class="dropdown"><!-- inicio de clase para desplegar submenus --> 
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expended="false">Fenómenos <span class="caret"></span></a><!-- inicio menu desplegable sub menu --> 
                      <ul class="dropdown-menu" role="menu"> <!-- elementos dentro del submenu --> 
                        <li><a href="#">Monitoreo en tiempo real</a></li> 
                        <!-- <li role="separator" class="divider"></li> -->
                        <li><a href="<?php echo $schema.$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]?>/catac/comunicados/comunicados.php"> -Comunicados sísmicos</a></li> 
                        <!-- <li><a href="'.$escaped_link.'">'.$escaped_link.'</a></li> --> 
                        <li><a href="#">-Sismos</a></li> 
                        <li><a href="#">-Volcanes</a></li> 
                        <li><a href="#">-Deslizamientos</a></li> 
                        <li><a href="#">-Maremotos (Tsunamis)</a></li> 
                        <li><a href="#">-Fallas Geológicas</a></li> 
                        <li><a href="#">-Geología</a></li> 
                        <li><a href="#">-Geología</a></li> 
                        <li><a href="#">-Geofísica Aplicada</a></li> 
                        <li><a href="#">-Desastres</a></li> 
                      </ul>   <!-- fin elementos dentro del submenu --> 
 
                    </li>  <!-- fin de clase para desplegar submenus --> 
 
                    <li><a href="#">Nuestro Trabajo</a></li> 
                    <li><a href="<?php echo $schema.$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] ?>/catac/contacto.php"">Contacto </a></li> 
                </ul><!-- fin lista menu top -->     
 
                <!-- inicio de formulario de busqueda ubicado al lado derecho de topmenu --> 
                <form action="" class="navbar-form navbar-right" role="search"> 
                  <div class="form-group"> 
                        <input type="text" name="buscar" class="form-control" placeholder="buscar">                     
                  </div> 
 
                  <button type="submit" class="btn btn-primary"> 
                    <span class="glyphicon glyphicon-search"></span> 
                  </button> 
 
                  
                </form>

                 
                </form>

            </div>
     
    </div><!-- centra el contenido respecto al navegador -->

  </nav>

  <!-- Aqui el jumbroton -->

      <section class="jumbotron">
        <div class="row"> <!-- row de logo y Texto -->
            <div class="container">
                  <div class="col-md-6 col-md-offset-0 clearfix" >
                  <div id="logo"> </div> <!-- fin id-logo -->
                      <!-- <div class="col-md-6 col-md-offset-0 clearfix" >  -->                                                  
                    <p>Instituto Nicaragüense de Estudios Territoriales</p> 
                  </div><!-- fin primera caja de 6 col-->

                  <div class="col-md-6 col-md-offset-0 clearfix pull-left">
                       <h1>CATAC</h1>
                       <p>Centro de Asesoramiento de Tsunami en América Central</p>
                  </div>

            </div><!-- fin container -->
         
        </div> <!-- fin row --> 
      </section> <!-- fin section jumbotron -->
  </header>