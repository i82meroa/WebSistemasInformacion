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
                <label for="direccion">*Dirección:</label>
                    <input type="text" name="direccion" size="30" maxlength="50" placeholder="Introduzca la direccion">
                </div>            
                <br>
                <div>
                    <label for="precio">*Precio:</label>
                    <input type="text" name="precio" size="30" maxlength="12" placeholder="Introduzca el precio">€
                   
                </div>
                <br>
                <div>
                    <label for="tamano">*Tamaño:</label>
                    <input type="text" name="tamano" size="30" maxlength="12" placeholder="Introduzca tamaño">
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
$sql = "INSERT INTO sif_tfp (Beneficio_bruto, Impuestos, Intereses, Despreciacion, Gastos_Generales)
VALUES ('$Beneficio_bruto', '$Impuestos', '$Intereses', '$Despreciacion', '$Gastos_Generales')";

if (mysqli_query($conexion, $sql)) 
{
  echo "<font color='green'>Registro añadido correctamente.</font>";
} 
else 
{
  echo "Error: No se pudieron introducir los datos.<br>" . mysqli_error($conexion);
}
      
mysqli_close($conexion);
?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </body>
</html>
