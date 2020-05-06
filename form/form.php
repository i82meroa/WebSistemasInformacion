<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inserción  de vivienda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
    <body>
<div class="menu">
  <div class="text-center">
    <div class="btn-group" role="group" aria-label="...">
  </div>
</div>


<?php
#Abrimos conexion con mysql
include 'conexion.php';
?>
  
        <div class="container">
        <H1>Datos de cliente</H1><BR>
            <form name="vivienda" action="form.php" method="POST" enctype="multipart/form-data">
            <fieldset>
              <legend>Rellene el formulario</legend></br>
                <div>
                <label for="Beneficio_bruto">Beneficio bruto:</label>
                    <input type="text" name="Beneficio_bruto" size="30" maxlength="50">
                </div>            
                <br>
                <div>
                    <label for="Impuestos">Impuestos:</label>
                    <input type="text" name="Impuestos" size="30" maxlength="12">            
                </div>
                <br>
                <div>
                    <label for="Intereses">Intereses:</label>
                    <input type="text" name="Intereses" size="30" maxlength="12">
                </div>
                <br>
                <div>
                    <label for="Despreciacion">Despreciacion:</label>
                    <input type="text" name="Despreciacion" size="30" maxlength="12">
                </div>
                <br>
                <div>
                    <label for="Gastos_Generales">Gastos Generales:</label>
                    <input type="text" name="Gastos_Generales" size="30" maxlength="12">
                </div>
                <br>
                <input type="submit" name="enviar" id="enviar" class="btn btn-default" value="Enviar">
            
            </div>
            </fieldset>
            </form>
            </div>
      
<?php
        //Facilitamos recogida de datos con variables sencillas
$Beneficio_bruto=$_REQUEST['Beneficio_bruto'];
$Impuestos=$_REQUEST['Impuestos'];
$Intereses=$_REQUEST['Intereses'];
$Despreciacion=$_REQUEST['Despreciacion'];
$Gastos_Generales=$_REQUEST['Gastos_Generales'];

//Insercion de datos
$sql = "INSERT INTO DATOS_ACTIVOS (ANO, Beneficio_bruto, Impuestos, Intereses, Despreciacion, Gastos_Generales)
VALUES (2020, '$Beneficio_bruto', '$Impuestos', '$Intereses', '$Despreciacion', '$Gastos_Generales')";
  
mysqli_close($conexion);
?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </body>
</html>
