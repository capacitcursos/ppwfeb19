<!doctype html>
<html lang="es">
  <head>
    <?php include 'includes/head.php'; ?>
    <title>Inicio - Capacit - Cursos & Capacitaciones IT</title>
  </head>
  
  <body>
     <!-- INICIO DEL HEADER -->
     <?php include 'includes/header.php'; ?>
     <!-- /.FIN DEL HEADER -->
    <main>
        
       
       <div class="container-fluid banner">
        <div class="container">
          <h1>Desarrollo de Paginas web y tiendas online</h1>
          <h2>dsdsLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>
          <a href="#" class="btn btn-success btn-lg">Contactar</a>
        </div>
       </div>

       <section id="servicios-destacados">
        <div class="container">
          
          <div class="row">
            <div class="col-md-12 titulo-seccion">
              <h2>Servicios Destacados</h2>
              <hr>
            </div>
          </div>         

          <div class="row"> <!--fila -->
            <?php for ($i=0; $i < 3; $i++) { ?>               
            
            <div class="col-md-4"><!--columna -->
              <h3>Diseño Web</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

            <a href="detalle.php" class="btn btn-success">Detalles</a>       
         </div> 

         <?php } ?>

          </div>          
        </div>               
       </section>

       <section id="banner-medio">
          <div class="container-fluid">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>

            <a href="#" class="btn btn-warning">Click Aqui!</a>
          </div>
       </section>

       <section id="equipo">
         <div class="container">
          
          <div class="row">
            <div class="col-md-12 titulo-seccion">
              <h2>Nuestro Equipo</h2>
              <hr>
            </div>
          </div>

           <div class="row">
            <?php
            $x=0;
            while ($x <= 4) { ?>                       
            
            <div class="col-md-3">

              <div class="card">
                <img src="images/avatar.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              
            </div>

             <?php 
              $x++;
              } ?>
            
           </div>
         </div>
       </section>


    </main>

    <!-- INICIO DEL FOOTER -->
    <?php include 'includes/footer.php'; ?>
    <!-- /.FIN DEL FOOTER --> 

    <!-- INICIO De SCRIPT -->
    <?php include 'includes/script.php'; ?>
    <!-- /.FIN DE SCRIPT --> 
    
    
  </body>


</html>