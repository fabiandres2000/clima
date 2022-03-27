<?php
include_once("conexion.php");
session_start();
$usuario = @$_POST['usuario'];
$password = @$_POST['pass'];
$password = md5($password);
if(empty($usuario) || empty($password)){
header("Location: index.php");
exit();
}

$result= $con->query("SELECT * from cliente where   usuario = '$usuario' and clave = '$password' and estatus = 0");
if($row = mysqli_fetch_array($result)){
        $_SESSION['logueado'] = true;
        $_SESSION['pass'] = $password;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['id']=$row['idcl'];
        $_SESSION['nombre'] = $row['nombre'];
        echo json_encode(array('success' => 1, 'mensaje' => "administrador.php"));
    }else{
$result1= $con->query("SELECT * from cliente where   usuario = '$usuario' and clave = '$password' and estatus = 1");
        if($row = mysqli_fetch_array($result1)){
            $_SESSION['logueado'] = true;
            $_SESSION['pass'] = $password;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['id']=$row['idcl'];
            $_SESSION['nombre'] = $row['nombre'];
            echo json_encode(array('success' => 1, 'mensaje' => "cliente.php"));
        }else{
           echo json_encode(array('success' => 0, 'mensaje' => "Verifique sus datos"));
           exit();
        }
    }
?>


