<?php
session_start();
include_once("conexion.php");
if(($_SESSION['logueado']) == true){ 
$sql="SELECT COUNT(*) FROM `cliente` where estatus = 1";
$resultado =mysqli_fetch_array($con -> query($sql));
$sql2="SELECT SUM(pines) FROM `compra`";
$resultado2 =mysqli_fetch_array($con -> query($sql2));
$sql3="SELECT SUM(precio) FROM `compra`";
$resultado3 =mysqli_fetch_array($con -> query($sql3));
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="administrador.php" class="brand-link">
      <img src="icon-user.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin SIRP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #172A49">
      <!-- Sidebar user panel (optional) -->
      <div class="text-center">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://i0.pngocean.com/files/831/88/865/user-profile-computer-icons-user-interface-mystique.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nombre']; ?></a>
        </div>
      </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <br><br>
          <li class="nav-header">COMPRAS</li>
          <li class="nav-item">
            <a type="button" data-toggle="modal" data-target="#myModal" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Compra Cliente Nuevo
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a type="button" data-toggle="modal" data-target="#myModal2" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Compra Cliente Existente
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <br><br>
          <hr>
          <div class="text-center">
             <li class="nav-item">
            <a href="cerrar.php"  class="btn btn-danger nav-link">
              <i class="fa fa-power-off" aria-hidden="true"></i>
              <p>
                Cerrar sesion
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          </div>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Contabilidad General</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $resultado2[0]; ?></h3>

                <p>Pines Vendidos</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Nueva Compra <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $resultado[0]; ?></h3>

                <p>Clientes Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Registrar Nuevo Cliente <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $resultado3[0]; ?></h3>

                <p>Ganancias Totales</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
 </div>
</section>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Clientes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>PINES COMPRADOS</th>
                    <th>PINES DISPONIBLES</th>
                    <th>FECHA DE REGISTRO</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                        $consulta = "SELECT * from cliente where estatus=1";
                        $clientes = $con->query($consulta);
                  ?>
                  <?php  
                          while ($row = mysqli_fetch_array($clientes)) {
                  ?>
                         <tr>
                           <td><?php echo $row[0] ?></td>
                           <td><?php echo $row[1] ?></td>
                           <td><?php echo $row[4] ?></td>
                           <td><?php echo $row[6] ?></td>
                           <td><?php echo $row[7] ?></td>
                           <td><?php echo $row[2] ?></td>
                         </tr>
                  <?php  
                          }   
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>PINES COMPRADOS</th>
                    <th>PINES DISPONIBLES</th>
                    <th>FECHA DE REGISTRO</th>
                  </tr>
                  </tfoot>
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
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

 <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Compra de cliente existente</h4>
        </div>
        <div class="modal-body">
          <form id="r_ce" action="acciones/guardar_compra.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="Identificacion">#Identificacion</label>
                <select name="Identificacion" class="form-control" id="Identificacion" required>
                <?php 
                    $clientes = $con->query('SELECT * FROM cliente where estatus=1');
                    while ($row = mysqli_fetch_array($clientes)) {
                ?>         
                    <option value="<?php echo $row[0] ?>"><?php echo $row[1]; ?></option>
                <?php 
                  }
                ?>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="Empleados"># De Pines</label>
                <input type="number" class="form-control" id="Pines" min="1" name="Pines"  required>
              </div>
              <div class="form-group col-md-6">
                <label for="Precio X Pin">Precio X Pin</label>
                <input type="number" class="form-control" id="Precio" name="Precio" placeholder="$20000" required>
                </div>      
            </div>
            <hr>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>




  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Compra de cliente nuevo</h4>
        </div>
        <div class="modal-body">
          <form id="v_cn" action="acciones/guardar_cliente.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="Nombre" required>
              </div>
              <div class="form-group col-md-6">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" id="Apellido" placeholder="Apellido" name="Apellido" required>
              </div>
              
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="Pines">Pines</label>
                <input type="number" class="form-control" id="Pines" placeholder="# De Pines" name="Pines" required>
              </div>
              <div class="form-group col-md-4">
              <label for="Email">Correo</label>
              <input type="email" class="form-control" id="Correo" name="Correo" placeholder="1234@example.com" required>
              </div>
              <div class="form-group col-md-4">
              <label for="Precio X Pin">Precio X Pin</label>
              <input type="number" class="form-control" id="Precio" name="Precio" placeholder="$20000" required>
              </div>
            </div>
            <hr>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>



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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

  <script src="js/compras.js"></script> 
</body>
</html>
<?php
}else{  
  exit();
}
?>