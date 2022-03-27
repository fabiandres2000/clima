<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIRP V2.0</title>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body style="background-color: #172A49">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block text-center">
                <br><br><br><br>
                <img src="icon-user.png" width="270">
                <br>
                <br>
                <strong><h3 style="color: #36b9cc">SIRP-CLIMA</h3></strong>
              </div>
              <div class="col-lg-6">
                <br>
                <br>
                <br>
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4">Bienvenido de Nuevo!</h1>
                  </div>
                  <form id="isesion" class="user" action="login.php" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="usuario" placeholder="Ingrese su direccion de correo electronico...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña...">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                       <br>
                      </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-user btn-block" style="font-size: 27px">Ingresar <span><i class="fa fa-sign-in" aria-hidden="true"></i></span></button> 
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="js/inicio_sesion.js"></script> 
</body>

</html>
