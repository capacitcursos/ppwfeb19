<?php 
  require '../conexion/conexion.php';

  $sql = "SELECT * FROM usuarios";    //creamos consulta sql
  $query = $connection->prepare($sql);//preparamos la consulta sql
  $query->execute();                  //ejecutamos la consulta sql

  $result= $query->fetchAll();      /* Almacenamos todas las filas obtenidas 
                                       de la base de datos en la variable $result
                                    */   

 ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition sidebar-mini">

<div class="wrapper">

   <?php 
      include 'includes/nav.php';
      include 'includes/aside.php';
    ?>  

  <!-- INICIO DE CONTENIDO  -->
  <div class="content-wrapper">
    
    <!-- ENCABEZADO DE CONTENIDO -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Listado de Usuarios</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.FIN DE ENCABEZADO DE CONTENIDO -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Registros</h5>
              </div>
              <div class="card-body">                
                <!-- CONTENIDO -->
                <?php 
                //recorrer variable result e imprimir datos
                  foreach ($result as $fila) {
                    echo $fila['nombre']."<br>";
                    echo $fila['email']."<br>";
                    echo $fila['password']."<br>";
                  } 

                ?>
              </div>
            </div>

            

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>informacion</h5>
      <p>Contenido Informativo</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <?php
  include 'includes/footer.php'; 
   ?>
</body>
</html>
