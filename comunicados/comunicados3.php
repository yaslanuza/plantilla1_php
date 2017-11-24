<!DOCTYPE html>
<html lang="es">
<head>

  <!-- CSS de Bootstrap -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">

<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
 -->      <title>CATAC</title>

</head>

<body>
<!--  function getCurrentURL()
{
    $currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $currentURL .= $_SERVER["SERVER_NAME"];
 
    if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
    {
        $currentURL .= ":".$_SERVER["SERVER_PORT"];
    } 
 
        $currentURL .= $_SERVER["REQUEST_URI"];
    return $currentURL;
} -->

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

                <ul class="nav navbar-nav"><!-- inicio lista menu top -->
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li><a href="../quienes.php">¿Quiénes Somos?</a></li>               
                    <li class="dropdown"><!-- inicio de clase para desplegar submenus -->
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expended="false">Fenómenos <span class="caret"></span></a><!-- inicio menu desplegable sub menu -->
                      <ul class="dropdown-menu" role="menu"> <!-- elementos dentro del submenu -->
                        <li><a href="#">Monitoreo en tiempo real</a></li>
                        <!-- <li role="separator" class="divider"></li> -->
                        <li><a href="comunicados/comunicados.php">-Comunicados sísmicos</a></li>
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
                    <li><a href="#">Contacto </a></li>
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
                       <p>Centro de Asesoramiento de Sunami en América Central</p>
                  </div>

            </div><!-- fin container -->
         
        </div> <!-- fin row --> 
      </section> <!-- fin section jumbotron -->
  </header>

  <!-- contenedor principal de noticias/articolos principales -->
  <section class="main container">
      <div class="row">   
    <!-- inicio fila row para migas, container-articulos-principales y asidebar -->
            <section class="posts col-md-9"> 

                 <?php include "../migas.php"; ?>

                 <!-- seccion para de detalle de cada articulo publicado -->

                 <!-- inicio article 1 -->
                 <article class="post clearfix"> 
                
                 <h2 class="post-title">
                    <a href="#"> Comunicados</a>
                 </h2>
                 <p> <span class="post-fecha">3 de Noviembre del 2017</span> por <span class="post-autor"> <a href="#"> Admin</a></p>
                  <!-- justifica el texto -->
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  
                  <p class="post-contenido text-justify">
                    La Dirección de Sismología de la Dirección General de Geologia y Geofísica del INETER tiene como principal responsabilidad realizar la vigilancia permanente y alerta temprana sobre el comportamiento de los sismos, tsunamis, eventos sismo-volcánicos, efectos sísmicos de los deslizamientos. Para eso, opera las redes de estaciones sísmicas, y sismo-volcánicas. Además ejecuta investigaciones científicas y coopera en la elaboración de mapas y Sistemas de Información Geográficas (SIG) de amenaza, vulnerabilidad y riesgo por estos fenómenos peligrosos.
                  </p>

                    <p class="text-justify">La Vicepresidenta de la República, Compañera Rosario Murillo, informó que el doctor Wilfried Strauch, asesor científico del Ineter, fue nombrado como Presidente en ejercicio del Grupo Intergubernamental del Sistema de Mitigación de Tsunamis en el Pacífico. "Este es un Organismo de la UNESCO, Comisión Oceanográfica Intergubernamental. Y el doctor Strauch está integrado con Nicaragua desde el año 92, después del Tsunami. Estará apoyando el reforzamiento del Centro de Asesoramiento de Tsunamis para América Central que se estableció en el Ineter, y estará también brindando en tiempo real información sismológica y de Tsunami a todos los países de América Central, de manera que podamos tomar decisiones inmediatas sobre medidas de protección a la población", especificó Rosario. 
                    </p>

                  <p class="text-justify">Comentó que próximamente se va a "preparar los ejercicios internacionales de alerta de tsunamis en octubre del año próximo y a certificar a las comunidades nicaragüenses costeras preparadas para tsunamis".
                  "El doctor Strauch representa en este importante organismo internacional, en primer lugar sus propias capacidades y calificaciones, y también en primer lugar a nuestra Nicaragua y a nuestro Ineter, reconocido internacionalmente como un organismo científico de alta precisión y especialidad", valoró la Vicepresidenta.
                  </p>

                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                 

                </article> <!-- fin quienes somos 1 -->

                <!-- elementos de paginacion dentreo del section luego de articulos -->
                <?php include "../paginacion.php"; ?>

            </section> <!-- fin section post col-->  

                <?php include "../aside.php"; ?> 

        </div> <!-- fin class row -->  
       
  </section> <!-- fin main container -->
   <?php include "../footer.php"; ?>
  
  <!-- seccion para el pies de pag -->
<!-- el jqyuere debe ir abtes del bootstrao.min -->
 <script src="../js/jquery.js"></script>
 <script src="../js/bootstrap.min.js"></script>


</body>
</html>
