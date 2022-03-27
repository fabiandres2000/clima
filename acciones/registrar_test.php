<?php 
    include_once("../conexion.php");
    $id = $_GET['cliente'];
    $nombre = $_POST['nombre'];
    $n_preguntas = $_POST['n_preguntas'];
    
    $sql="INSERT INTO `formulario`(`id_cliente`, `nombre`, `numero_preguntas`) VALUES ($id,'$nombre',$n_preguntas)";
    $resultado =$con -> query($sql);

    $id_form = mysqli_fetch_array( $con -> query("SELECT MAX(`id_formulario`) from `formulario` where `id_cliente` = $id "));
    $id_form = $id_form[0];

    if($resultado ){
        echo json_encode(array('success' => 1, 'mensaje' => $id_form));
    }else{
        echo json_encode(array('success' => 0, 'mensaje' => "Ocurrio un error, intente nuevamente"));
    }   
?>