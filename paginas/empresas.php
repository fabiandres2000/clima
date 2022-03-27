<?php
session_start();
include_once("../conexion.php");
if(($_SESSION['logueado']) == true){ 
 $id = $_SESSION['id'];
 $sql="SELECT COUNT(*) FROM `empresa` WHERE idcl = $id";
 $sql2="SELECT pines FROM `cliente` WHERE idcl = $id";
 $sql3="SELECT pinesdisp FROM `cliente` WHERE idcl = $id";
 $sql4="SELECT * FROM `empresa` WHERE idcl = $id";
 $resultado =mysqli_fetch_array($con -> query($sql));
 $resultado2 =mysqli_fetch_array($con -> query($sql2));
 $resultado3 =mysqli_fetch_array($con -> query($sql3));
 $resultado4 =$con -> query($sql4);
 
?> 
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body style="padding: 30px 10px 10px 10px;">
<?php 
  if ($resultado[0] == 0 ) { 
?>
  <div class="text-center">
    <img src="../img/descarga.png">
  </div>
  <br><br>
  <div class="alert alert-danger text-center" role="alert" >
    <h4>Usted aún no ha registrado ninguna empresa.</h4>
    <h4>Si desea registrar una nueva empresa, por favor haga click en el siguiente botón. </h4>
  </div>
  <br>
  <div class="text-center">
    <a href="registrar_empresa.php" class="btn btn-success"><span><i class="fa fa-plus-square" aria-hidden="true"></i></span> Crear nueva empresa</a>
  </div> 
  <br> 
  <hr>
  <br>
  <div class="container-fluid text-center">

          
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pines Comprados</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $resultado2[0]; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-map-pin fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pines Disponibles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $resultado2[0]; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-map-pin fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php 
}else{
?> 

<div class="text-center">
  <h2><strong>Contbilidad general</strong></h2>
</div>
 <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pines Comprados</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $resultado2[0]; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-map-pin fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pines Disponibles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $resultado3[0]; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-map-pin fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pines Utilizados</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $resultado2[0]-$resultado3[0]; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-map-pin fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  </div>
  <br>
  <hr>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                   <h2><strong>Mis empresas</strong></h2>
                    <p>listado de empresas que ha registrado hasta la fecha: <strong><?php echo date('d-m-Y'); ?></strong></p>    
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                   <tr>
                      <th>Nombre</th>
                      <th>#Empleados asignados</th>
                      <th>Emleados encuestados</th>
                      <th>Empleados Borrados</th>
                      <th>Pines disponibles</th>
                      <th></th>
                      <th></th>
                   </tr>
                  </thead>
                  <tbody>
                   <?php 
                     while ($row = mysqli_fetch_array($resultado4)) {
                    ?>
                    <tr>
                      <td><a  href="perfil_empresa.php?id=<?php echo $row[0] ?>"><i class="fa fa-search-plus"></i><span> <?php echo $row[2]; ?></span></a></td>
                      <td style="text-align: center;"><br><br><?php echo $row[3]; ?></td>
                      <td style="text-align: center;"><br><br><?php echo $row[4]; ?></td>
                      <td style="text-align: center;"><br><br><?php echo $row[8];?></td>
                      <td style="text-align: center;"><br><br><?php echo $row[3]-$row[4]; ?></td>
                      <td>
                        <button onclick="document.getElementById('id01').style.display='block';cambiaValores(<?php echo $row[0]; ?>)" class="btn btn-danger"> <span><i class="fa fa-minus-square" aria-hidden="true"></i></span><br> Disminuir #empleados</button>
                      </td>
                      <td> 
                        <button onclick="document.getElementById('id02').style.display='block';cambiaValores2(<?php echo $row[0]; ?>)" class="btn btn-info"> <span><i class="fa fa-plus-square"></i></span><br> Aumentar #empleados</button>
                      </td>
                    </tr>
                  <?php 
                    }
                  ?>
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

<?php 
}
?>  
<br>  <br><br><br><br><br>
<!-- Modal aumentar-->
 <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <div class="text-center"><h1>Por favor ingrese el # de empleados <br> que desea disminuir a esta empresa</h1></div> 
        <hr>
          <form action="../acciones/disminuir_empleados.php" method="POST">
            <input type="number" name="pinesdisminuir" class="form-control">
            <hr>
            <input type="hidden" name="idclientedisminuir" value="<?php echo $id ?>" class="form-control">
            <input type="hidden" class="form-control" id="Idempresa"  name="empresadisminuir" value="" >
            <div class="text-center"><button type="submit" class="btn btn-success">Guardar</button></div>
            <hr>
          </form>
      </div>
    </div>
  </div>
<!-- Modal --> 

  <!-- Modal disminuir -->
  <div id="id02" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <div class="text-center"><h1>Por favor ingrese el # de empleados <br>que desea adicionar a esta empresa</h1></div>
        <hr>
          <form action="../acciones/adicionar_empleados.php" method="POST">
            <input  type="number" name="pinesadicionar" class="form-control">
            <input type="hidden" name="idlienteadicionar" value="<?php echo $id ?>" class="form-control">
            <input type="hidden" class="form-control" id="Ide2"  name="empresaadicionar" value="" >
            <hr>
            <div class="text-center"><button type="submit" class="btn btn-success">Guardar</button></div>
            <hr>
          </form>
      </div>
    </div>
  </div>
  <!-- Modal --> 
<script type="text/javascript">
  function cambiaValores(valor) {
    var inputNombre = document.getElementById("Idempresa");
    inputNombre.value = valor;
}
function cambiaValores2(valor) {
    var inputNombre = document.getElementById("Ide2");
    inputNombre.value = valor;
}
</script> 



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

<?php
}else{  
  exit();
}
?>
