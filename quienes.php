<!DOCTYPE html>
<html lang="es">
<head>

      <?php include 'metadatos.php';?>
      <?php include 'estilos.php' ?>
      <?php include 'scripts.php' ?>


      <title>CATAC</title>

</head>

<body>
 
 <?php include "header.php"; ?>
 

  <!-- contenedor principal de noticias/articolos principales -->
  <section class="main container">
      <div class="row">   
    <!-- inicio fila row para migas, container-articulos-principales y asidebar -->
            <section class="posts col-md-9"> 

                 <?php include "migas.php"; ?>

                 <!-- seccion para de detalle de cada articulo publicado -->

                 <!-- inicio article 1 -->
                 <article class="post clearfix"> 
                
                 <h2 class="post-title">
                    <a href="#"> ¿Quiénes Somos?</a>
                 </h2>
                 <p> <span class="post-fecha">3 de Noviembre del 2017</span> por <span class="post-autor"> <a href="#"> Admin</a></p>
                  <!-- justifica el texto -->
                  <p class="post-contenido text-justify">
                    La Dirección de Sismología de la Dirección General de Geologia y Geofísica del INETER tiene como principal responsabilidad realizar la vigilancia permanente y alerta temprana sobre el comportamiento de los sismos, tsunamis, eventos sismo-volcánicos, efectos sísmicos de los deslizamientos. Para eso, opera las redes de estaciones sísmicas, y sismo-volcánicas. Además ejecuta investigaciones científicas y coopera en la elaboración de mapas y Sistemas de Información Geográficas (SIG) de amenaza, vulnerabilidad y riesgo por estos fenómenos peligrosos.
                  </p>

                    <p class="text-justify">La Vicepresidenta de la República, Compañera Rosario Murillo, informó que el doctor Wilfried Strauch, asesor científico del Ineter, fue nombrado como Presidente en ejercicio del Grupo Intergubernamental del Sistema de Mitigación de Tsunamis en el Pacífico. "Este es un Organismo de la UNESCO, Comisión Oceanográfica Intergubernamental. Y el doctor Strauch está integrado con Nicaragua desde el año 92, después del Tsunami. Estará apoyando el reforzamiento del Centro de Asesoramiento de Tsunamis para América Central que se estableció en el Ineter, y estará también brindando en tiempo real información sismológica y de Tsunami a todos los países de América Central, de manera que podamos tomar decisiones inmediatas sobre medidas de protección a la población", especificó Rosario. 
                    </p>

                  <p class="text-justify">Comentó que próximamente se va a "preparar los ejercicios internacionales de alerta de tsunamis en octubre del año próximo y a certificar a las comunidades nicaragüenses costeras preparadas para tsunamis".
                  "El doctor Strauch representa en este importante organismo internacional, en primer lugar sus propias capacidades y calificaciones, y también en primer lugar a nuestra Nicaragua y a nuestro Ineter, reconocido internacionalmente como un organismo científico de alta precisión y especialidad", valoró la Vicepresidenta.
                  </p>

                 

                </article> <!-- fin quienes somos 1 -->

                <!-- elementos de paginacion dentreo del section luego de articulos -->
                <?php include "paginacion.php"; ?>

            </section> <!-- fin section post col-->  

                <?php include "aside.php"; ?> 

        </div> <!-- fin class row -->  
       
  </section> <!-- fin main container -->
  
  
  <!-- seccion para el pies de pag -->
   <?php include "footer.php"; ?>


</body>
</html>
