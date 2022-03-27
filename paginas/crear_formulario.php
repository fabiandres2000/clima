<?php 
    include_once("../conexion.php");
    $id = $_GET["id_form"];
    $form = mysqli_fetch_array($con -> query("SELECT * FROM `formulario` WHERE `id_formulario` = $id"));
    $numero_preguntas = intval($form[3]);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE | Crear formulario</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script>
    a = 0;
    function addPregunta(id_div){
        a++;
        var row = document.createElement('div');
        row.setAttribute('class', 'row')
        row.style.marginTop = "15px";
        var div = document.createElement('div');
        div.setAttribute('class', 'form-inline');
        div.innerHTML = '<div style="clear:both" class="valor_'+a+' col-md-offset-1 col-md-6"><input class="form-control" style="width: 100%;" name="opcion_'+a+'" type="text"/></div><div class="cancion_'+a+' col-md-2""><input class="form-control" name="valor_'+a+'" type="number"/></div>';
        row.appendChild(div);
        document.getElementById("preguntas_"+id_div).appendChild(row);
        document.getElementById("preguntas_"+id_div).appendChild(row);
    }
    </script>
    <style>
        #formulario {
            box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
            padding-top: 25px;
            padding-bottom: 25px;
            border-radius: 10px;
        }
    </style>
</head>
<body style="overflow-x: hidden;">
    <div class="container" style="margin-top: 50px;padding-left: 70px ">
        <div class="row">
            <div class="col-md-offset-1 col-md-12">
                <h1><?php echo $form[2] ?></h1>
            </div>
        </div>
        <hr>
        <?php 
            for ($i=1; $i <= $numero_preguntas; $i++) { 
        ?>
            <div class="row">
                <div class="col-md-offset-1 col-md-12">
                    <h3>Pregunta # <?php echo $i ?></h3>
                </div>
            </div>
            <form action="formulario2.html" id="formulario" method="post">
                <div class="row">
                    <div class="col-md-offset-1 col-md-3"><label>Enunciado de la pregunta</label></div>
                    <div class="col-md-6"><input class="form-control" name="nombre_cd" type="text"/></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div style="padding-top: 10px;" class="col-md-5"><label> Para agregar las opciones de respuesta presione:</label> </div>
                    <div class="col-md-2"><input type="button" style="width: 50%;" class="btn btn-success" id="add_cancion()" onClick="addPregunta(<?php echo $i ?>)" value="+" /></div>
                </div>
                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-offset-1 col-md-6"><label>Opcion de respuesta</label></div>
                    <div class="col-md-2"><label>Valor</label></div>
                </div>
                <div id="preguntas_<?php echo $i ?>">
                </div>
            </form>
            <br>
            <br>
            <br>
        <?php 
            }
        ?>
    </div>
</body>
</html>