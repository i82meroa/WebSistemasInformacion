<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inserción  de vivienda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
          <div class="container">
          <H1>Datos de cliente</H1><BR>
              <form name="form" action="form.php" method="POST" enctype="multipart/form-data">
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
              </fieldset>
              </form>
         </div>
  
  <?php
  $servername="68.183.213.14:3306";
  $username="usuario";
  $password="1920";
  $bd="sif_tfp";
  // Creamos la conexión pasándole el servidor, nombre de user, y clave. Si no se establece conexión muestra un error.
  $conexion = mysqli_connect( $servername, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
  //Seleccionamos la base de datos, que ya está declarada arriba.
  $db = mysqli_select_db( $conexion, $bd ) or die ("No se ha podido conectar a la Base de datos");
  
  //Facilitamos recogida de datos con variables sencillas
  $ejercicio='2020';
  $Beneficio_bruto=$_POST['Beneficio_bruto'];
  $Impuestos=$_POST['Impuestos'];
  $Intereses=$_POST['Intereses'];
  $Despreciacion=$_POST['Despreciacion'];
  $Gastos_Generales=$_POST['Gastos_Generales'];

  //Insercion de datos
  $sql = "INSERT INTO DATOS_ACTIVOS (ANO, Beneficio_bruto, Impuestos, Intereses, Despreciacion, Gastos_Generales)
  VALUES ('$ejercicio', '$Beneficio_bruto', '$Impuestos', '$Intereses', '$Despreciacion', '$Gastos_Generales')";
  if (mysqli_query($conexion, $sql)) 
  {
    echo "Registro añadido correctamente";
  } 
  else 
  {
    echo "Error: No se pudieron introducir los datos" . mysqli_error($conexion);
  }
  
  ?>

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</body>
</html>
