<?php
session_start();
include_once("conexion.php");
if(($_SESSION['logueado']) == true){ 
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
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="icon-user.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Cliente SIRP</span>
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
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Empresas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
                <a href="paginas/empresas.php" target="iframe_a" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mis Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="paginas/registrar_empresa.php"  target="iframe_a" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nueva Empresa</p>
                </a>
              </li>
            </ul>
          </li>
          <br>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-comment"></i>
              <p>
                Formularios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="empresas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mis Formularios</p>
                </a>
              </li>
              <li class="nav-item">
                <a type="button" data-toggle="modal" data-target="#myModal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Formulario</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="paginas/informe.php" target="iframe_a"  class="btn btn-success nav-link">
              <i class="fa fa-file-text" aria-hidden="true"></i>
              <p>
                Informes
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
    <br><br><br><br><br><br><br>
      <!-- Divider -->
      <hr class="sidebar-divider">
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

  <script language="JavaScript">
  //Ajusta el tamaño de un iframe al de su contenido interior para evitar scroll
            function autofitIframe(id){
              if (!window.opera && document.all && document.getElementById){
              id.style.height=id.contentWindow.document.body.scrollHeight;
              } else if(document.getElementById) {
              id.style.height=id.contentDocument.body.scrollHeight+"px";
              }
            }
  </script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <iframe height="300px" width="100%" src="paginas/empresas.php" name="iframe_a" style="border: none;" scrolling="no" onload="autofitIframe(this);">
  </iframe>
  </div>

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Crear nuevo test</h4>
        </div>
        <form action="acciones/registrar_test.php?cliente=<?php echo $_SESSION['id'] ?>" method="post" id="r_test">
          <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <input name="nombre" id="nombre" type="text" style="width: 100%;" class="form-control" placeholder="Nombre del formulario">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-12">
                  <input name="n_preguntas" id="n_preguntas" type="number" type="number" style="width: 100%;" class="form-control" placeholder="Numero de preguntas">
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>

    </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


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
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="js/cliente.js"></script> 

</body>
</html>
<?php
}else{  
  exit();
}
?>