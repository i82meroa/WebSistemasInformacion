<html>
    <head>
      <title>PHP y MySQL</title>
  </head>
  <body>
      <?php
        // Creamos la conexión pasándole el servidor, nombre de user, y clave. Si no se establece conexión muestra un error.
        $conexion = mysqli_connect("68.183.213.14", "usuario", "1920", "sif_tfp","3306");
        echo "Conección a bd correcta <br>";
     
      //Facilitamos recogida de datos con variables sencillas
        $ejercicio=$_POST['ejercicio'];
        $Beneficio_bruto=$_POST['Beneficio_bruto'];
        $Impuestos=$_POST['Impuestos'];
        $Intereses=$_POST['Intereses'];
        $Despreciacion=$_POST['Despreciacion'];
        $Gastos_Generales=$_POST['Gastos_Generales'];
        $Ventas=$_POST['Ventas'];

        //Insercion de datos
        $sql = "INSERT INTO DATOS_ACTIVOS (ANO, Beneficio_bruto, Impuestos, Intereses, Despreciacion, Gastos_Generales)
        VALUES ('$ejercicio', '$Beneficio_bruto', '$Impuestos', '$Intereses', '$Despreciacion', '$Gastos_Generales')";
        if (mysqli_query($conexion, $sql)) 
        {
          echo "Registro de 'Datos Activos' añadido correctamente <br>";
        } 
        else 
        {
          echo "Error: No se pudieron introducir los datos de 'Datos activos' <br>" . mysqli_error($conexion);
        }
        $sql = "INSERT INTO VARIABLES (ANO, N_VENTAS)
        VALUES ('$ejercicio', '$Ventas')";
        if (mysqli_query($conexion, $sql)) 
        {
          echo "Registro de 'VARIABLES' añadido correctamente <br>";
        } 
        else 
        {
          echo "Error: No se pudieron introducir los datos de 'VARIABLES' <br>" . mysqli_error($conexion);
        }
        mysqli_close($conexion);
      ?>
   <body>
 </html>
