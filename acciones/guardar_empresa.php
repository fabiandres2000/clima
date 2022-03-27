<?php 

	include_once("../conexion.php");
  $id = @$_POST['Id'];
  $nombre = @$_POST['Nombre'];
  $empleados = @$_POST['Empleados'];
  $departamento =  @$_POST['Departamento'];
  $ciudad =  @$_POST['Ciudad'];
  $check_departamento = 0;
  $check_edad = 0;
  $check_antiguedad = 0;
  $check_educacion = 0;
  $check_genero = 0;
  $email =  @$_POST['Email'];
  $fecha  = date("Y-m-d");
  $token = $nombre."_".$id;

  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://"; 
  }else{
    $url = "http://"; 
  }

  $url = $url . $_SERVER['HTTP_HOST'] ."/clima/paginas/pagina_registro.php?nombre_empresa=".$nombre;
  
  $sql2="SELECT pinesdisp FROM `cliente` WHERE idcl = $id";
  $resultado2 =mysqli_fetch_array($con -> query($sql2));
   
  if(!empty($_POST['check_lista'])) {
    foreach($_POST['check_lista'] as $seleccion) {
      if ($seleccion == "Departamento") {
        $check_departamento = 1;
      }else{
        if ($seleccion == "Edad") {
          $check_edad = 1;
        }else{
          if ($seleccion == "Genero") {
            $check_genero = 1;
          }else{
            if ($seleccion == "Antiguedad") {
              $check_antiguedad = 1;
            }else{
              $check_educacion = 1;
            }
          }
        }
      }
    }
	}

  if ($resultado2[0]>=$empleados) {
    $sql="INSERT INTO `empresa`(`idcl`, `empresa`, `nrousuarios`, `fecha`, `token`, `departamento`, `ciudad`, `var_departamento`, `var_edad`, `var_educacion`, `var_genero`, `var_antiguedad`, `email`) VALUES ($id,'$nombre','$empleados','$fecha','$token','$departamento','$ciudad',$check_departamento,$check_edad,$check_educacion,$check_genero,$check_antiguedad,'$email')";
    $resultado = $con -> query($sql);
    
  if($resultado)
  {
    $resultado2 = $con -> query("UPDATE `cliente` set pinesdisp = pinesdisp-$empleados WHERE idcl = $id");
  }
  else
  {
    echo "Ha ocurrido un error!";
  }
  }else{
    echo "No cuenta con esa cantidad de pines!";
  }
?>