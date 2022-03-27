<?php  
 $id = $_GET['id'];
 include_once("../conexion.php");
 $empresa = mysqli_fetch_array($con->query("SELECT * FROM `empresa` where idem ='$id'"));
 $e_empr = mysqli_fetch_array($con->query("SELECT COUNT(*) FROM `empleado` WHERE `idempresa`='$id'"));
 $e_empr2 = mysqli_fetch_array($con->query("SELECT COUNT(*) FROM `empleado` WHERE  `idempresa`='$id'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style_profile.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
     <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../css/radio.css" rel="stylesheet">
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="container">
         <div class="well profile " style="height: auto; -moz-box-shadow: 0px 0px 30px #9A9EA0;-webkit-box-shadow: 0px 0px 30px #9A9EA0;box-shadow: 0px 0px 30px #9A9EA0;">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><strong><?php echo $empresa[2]; ?></strong></h2>
                    <p><strong>Email: </strong> <?php echo $empresa[16]; ?> </p>
                    <p><strong>Departamento: </strong> <?php echo $empresa[9]; ?> </p>
                    <p><strong>Ciudad: </strong> <?php echo $empresa[10]; ?> </p>
                    <p><strong>Fecha de registro: </strong> <?php echo $empresa[5]; ?> </p>
                  </div>   
                <div class="col-xs-12 col-sm-4">
                    <img style="width: 90%;max-height: 177px;" src="https://ieruraldelsurtunja.edu.co/rds-content/uploads/ie_rural_sur_tunja_institucion_icono.png" width="180">
                </div>             
            </div>  
            <div class="col-sm-12">
              <hr>
              <p><strong>Link de Registro (para empleados) </strong></p>
              <p>
                <?php 
                  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
                    $url = "https://"; 
                  }else{
                      $url = "http://"; 
                  }
                  $url = $url . $_SERVER['HTTP_HOST'] ."/clima/paginas/pagina_registro.php?id=".$empresa[0];
                  echo $url;
                ?> 
              </p>
            </div>  
            <hr>
            <?php 
                 if ($empresa[11]==1) {
            ?>
            <div class="col-xs-12 divider  text-center" style="padding-bottom: 20px">
                <br>
                <a type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-info">
                    <i class="fa fa-university" aria-hidden="true"></i>
                    <span>Crear departamento para esta empresa</span>
                </a>
                <br>
            </div>
            <?php 
                } 
            ?>  
            <div class="col-xs-12 divider text-center">
                 <h3><strong>Información relacionada con los empleados</strong></h3>
               <br>
                <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong><?php echo $e_empr[0]; ?></strong></h2>                    
                    <h3><small>Empleados de la empresa</small></h3>
                </div>
                <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong> <?php echo $e_empr[0]; ?></strong></h2>                    
                    <h3><small>Empleados registrados</small></h3>
                </div>
                  <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong> <?php echo $e_empr[0]; ?></strong></h2>                    
                    <h3><small>Empleados en proceso</small></h3>
                </div>
                <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong> <?php echo $e_empr[0]; ?></strong></h2>                    
                    <h3><small>Empleados que terminaron la encuesta</small></h3>
                </div>
            </div>
              
            <div class="col-xs-12 divider text-center">
                <h3><strong>Generar informes </strong></h3>
                <br>
                <?php 
                   if ($empresa[12]==1) {
                ?>
                <div class="col-xs-12 col-sm-6 emphasis">
                    <a  style="width: 100%" href="" class="btn btn-success"><span><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span> Por edad</a>
                </div>
                <?php 
                  }
                   if ($empresa[11]==1) {
                ?>
                 <div class="col-xs-12 col-sm-6 emphasis">
                    <a  style="width: 100%" href="" class="btn btn-success"><span><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span> Por departamento</a>
                </div>
                 <?php 
                  }
                   if ($empresa[13]==1) {
                ?>
                <div class="col-xs-12 col-sm-6 emphasis">
                     <a  style="width: 100%" href="" class="btn btn-success"><span><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span> Por nivel de educacion</a>
                </div>
                 <?php 
                  }
                   if ($empresa[15]==1) {
                ?>
                 <div class="col-xs-12 col-sm-6 emphasis">
                    <a  style="width: 100%" href="" class="btn btn-success"><span><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>  Por antiguedad</a>
                </div>
                 <?php 
                  }
                   if ($empresa[14]==1) {
                ?>
                <div class="col-xs-12 col-sm-6 emphasis">
                     <a  style="width: 100%" href="" class="btn btn-success"><span><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span> Por genero</a>
                </div>
                 <?php 
                  }
                ?>
            </div>
         </div>                 
        </div>
    </div>
</div>
<br><br>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog"> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close btn btn-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <h2>Por favor ingrese el nombre del departamento a registrar:</h2>
          <form action="../acciones/guardar_departamento.php" method="POST">
            <input type="text" name="Nombredepartamento" class="form-control" required>
            <hr>
            <input type="hidden" class="form-control" id="Id"  name="Id" value="<?php echo $id ?>" >
         <div class="text-center">
             <button type="submit" class="btn btn-success">Guardar</button>
         </div>
          </form>
        </div>
        <div class="modal-footer">
           <h6>@SIRP</h6>
        </div>
      </div>
      
    </div>
  </div> 
  <!-- Modal --> 
</body>
</html>

