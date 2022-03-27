<?php 
    include_once("../conexion.php");
    $nombre = @$_POST['Nombre'];
    $apellido = @$_POST['Apellido'];
    $numeropines = @$_POST['Pines'];
    $correo = @$_POST['Correo'];
    $tipo = 1;
    $nombrecompleto = $nombre." ".$apellido;
    $fecharegistro  = date("Y-m-d");
    $clave = substr(md5(uniqid()), 0, 10);
    $dia  = date("d");
    $mes = date("m");
    $ano = date("Y");
    $precio = $numeropines*$_POST['Precio'];
    $clave_encriptada = md5($clave);
    $sql="INSERT INTO cliente (nombre,fecharegistro,estatus,usuario,clave,pines,pinesdisp) values('$nombrecompleto','$fecharegistro',$tipo,'$correo','$clave_encriptada',$numeropines,$numeropines)";
    $resultado = $con -> query($sql);
    
    if($resultado)
    {
      /*
      $sql2="INSERT INTO `compra`(`pines`, `dia`, `mes`, `ano`, `precio`) VALUES ($numeropines,$dia,$mes,$ano,$precio)";
      $resultado2 =$con -> query($sql2);
      $urllogin="http://www.icp-servicios.com/";
      $asunto = "Compra de pines";
      $contenido = "Cordial saludo  ". $nombrecompleto . "," . "<br><br>"
      ." Usted ha adquirido nuestro servicio"  . "<br><br>" 
      ." Su usuario es:  " . $correo . " "  . "<br><br>" 
      ." Su clave es:  " . $clave . " "  . "<br><br>" 
      ." El enlace de inicio es:  " . $urllogin . " "  . "<br><br>" 
      ." De antemano agradecemos la confianza depositada en nosotros." . "<br><br>"
      ." Atentamente:" . "<br>" . "<br>" 
      ." Instituto Colombiano de Psicometría." . "<br>"
      ." Ps. Mgr. Antonio Martínez, Gerente." . "<br>"
      ." Correo: icp@incometria.com - Celular (Whatsapp): 3012990890" . "<br><br>";

      $headers = 'From: InstitutoColombianodePscometria-icp@incometria.com ' . "\r\n" .
      'Reply-To: icp@incometria.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion() . "\r\n" .
      'MIME-Version: 1.0' . "\r\n" .
      'Content-type: text/html; charset=iso-8859-1' . " ";

      $to=$correo;
      mail($to, $asunto, $contenido, $headers);
      */
    }
    else
    {
        echo "Ha ocurrido un error, intente nuevamente";
    }
    
?>