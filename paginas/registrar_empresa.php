<?php
session_start();
include_once("../conexion.php");
if(($_SESSION['logueado']) == true){ 
 $id = $_SESSION['id'];
?> 
<!DOCTYPE html>
<html>
<head>
  <title></title>
  
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="padding: 10px 60px 60px 60px;">
  <br>
  <div class="container-fluid">
    <hr>
     <div class="text-center"><h2><strong>Registro de nueva Empresa</strong></h2></div>
          <hr>
         <form id="r_empresa" action="../acciones/guardar_empresa.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="Nombre">Nombre de la empresa</label>
              <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="Nombre" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Empleados"># de empleados</label>
              <input type="number" class="form-control" id="Empleados"  name="Empleados"  required>
              <input type="hidden" class="form-control" id="Empleados"  name="Id" value="<?php echo $id ?>" required>
            </div> 
             <div class="form-group col-md-6">
              <label for="Empleados">Email de la empresa</label>
              <input type="email" class="form-control" id="Email"  name="Email"  required>
            </div> 
        <div class="form-group col-md-6">
            <label for="Departamento">Departamento origen de la empresa</label>
            <select id="Departamento" name="Departamento"  class="form-control" required>
              <option value="Amazonas">Amazonas</option>
              <option value="Antioquia">Antioquia</option>
              <option value="Arauca">Arauca</option>
              <option value="Atlantico">Atlantico</option>
              <option value="Bolivar">Bolivar</option>
              <option value="Boyaca">Boyaca</option>
              <option value="Caldas">Caldas</option>
              <option value="Caqueta">Caqueta</option>
              <option value="Casanare">Casanare</option>
              <option value="Cauca">Cauca</option>
              <option value="Cesar">Cesar</option>
              <option value="Choco">Choco</option>
              <option value="Cordoba">Cordoba</option>
              <option value="Cundinamarca">Cundinamarca</option>
              <option value="Guainia">Guainia</option>
              <option value="Guaviare">Guaviare</option>
              <option value="Huila">Huila</option>
              <option value="La Guajira">La Guajira</option>
              <option value="Magdalena">Magdalena</option>
              <option value="Meta">Meta</option>
              <option value="Nariño">Nariño</option>
              <option value="Norte de santander">Norte de santander</option>
              <option value="Putumayo">Putumayo</option>
              <option value="Quindio">Quindio</option>
              <option value="Risaralda">Risaralda</option>
              <option value="San Andres y Providencia">San Andres y Providencia</option>
              <option value="Santander">Santander</option>
              <option value="Sucre">Sucre</option>
              <option value="Tolima">Tolima</option>
              <option value="Valle del Cauca">Valle del Cauca</option>
              <option value="Vaupes">Vaupes</option>
              <option value="Vichada">Vichada</option>
          </select> 
          </div> 
          <div class="form-group col-md-6">
            <label for="Ciudad">Ciudad origen de la empresa</label>
            <input type="text" name="Ciudad" class="form-control">
          </div>
          <div class="form-group col-md-12">
            <label for="Ciudad"><strong>* Seleccione las variables que utilizara para los informes de esta empresa:</strong></label>
          </div>
            <div class="form-group col-md-4">
               <p>
                  <input name="check_lista[]" type="checkbox" id="check1" value="Departamento" />
                  <label class="ceckk" for="check1" >Departamento</label><br>
               </p> 
            </div> 
             <div class="form-group col-md-4">
               <p>
                  <input name="check_lista[]" type="checkbox" id="check2" value="Edad" />
                  <label class="ceckk" for="check2" >Edad</label><br>
               </p> 
            </div> 
             <div class="form-group col-md-4">
               <p>
                  <input name="check_lista[]" type="checkbox" id="check3" value="Antiguedad" />
                  <label class="ceckk" for="check3" >Antiguedad</label><br>
               </p> 
            </div> 
             <div class="form-group col-md-4">
               <p>
                  <input name="check_lista[]" type="checkbox" id="check4" value="Nivel de educación" />
                  <label class="ceckk" for="check4" >Nivel de educación</label><br>
               </p> 
            </div> 
             <div class="form-group col-md-4">
               <p>
                   <input name="check_lista[]" type="checkbox" id="check5" value="Genero" />
                    <label class="ceckk" for="check5" >Genero</label>
               </p> 
            </div>    
          </div>        
          </div>
        <hr>
        <div class="text-center">
           <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> <span> Guardar</span></button>
        </div>
      </form>
  </div>  
  <br>  
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="js/empresa.js"></script> 
</body>
</html>

<?php
}else{  
  exit();
}
?>
