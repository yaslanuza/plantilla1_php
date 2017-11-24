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
                 <?php include "main-articles.php"; ?>


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
