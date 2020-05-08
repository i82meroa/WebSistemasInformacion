<html>
    <head>
      <title>PHP y MySQL</title>
      <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          background-color: white;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
      </style>
  </head>
  <body style="background-color:powderblue;">
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
        $Inversiones=$_POST['Inversiones'];
        $totalactivos=$_POST['totalactivos'];
      
        $Ventas=$_POST['Ventas'];
        $clientespotenciales=$_POST['clientes_potenciales'];
        $ventastotales=$_POST['ventastotales'];
      
        $clics=$_POST['Clics'];
        $impresiones=$_POST['Impresiones'];
        $capacidadactual=$_POST['capacidadactual'];
        $capacidadmaxima=$_POST['capacidadmaxima'];
      
        $capital=$_POST['capital'];
        $fondospropios=$_POST['fondospropios'];
      
        $amortizaciones=$_POST['Amortizaciones'];
        $provisiones=$_POST['provisiones'];
      

        //Insercion de datos
        $sql = "INSERT INTO DATOS_ACTIVOS (ANO, Beneficio_bruto, Impuestos, Intereses, Despreciacion, Gastos_Generales, Inversiones, TOTAL_ACTIVOS)
        VALUES ('$ejercicio', '$Beneficio_bruto', '$Impuestos', '$Intereses', '$Despreciacion', '$Gastos_Generales', '$inversiones', '$totalactivos')";
        if (!mysqli_query($conexion, $sql))  
        {
          echo "Error: No se pudieron introducir los datos de Datos activos <br>" . mysqli_error($conexion);
        }
      
        $sql = "INSERT INTO VARIABLES (ANO, N_VENTAS, n_clientes_potenciales, N_VENTAS_TOTALES)
        VALUES ('$ejercicio', '$Ventas', '$clientespotenciales', '$ventastotales')";
        if (!mysqli_query($conexion, $sql)) 
        {
          echo "Error: No se pudieron introducir los datos de Variables <br>" . mysqli_error($conexion);
        }
 
        $sql = "INSERT INTO DATOS_MARKETING
        VALUES ('$clics', '$impresiones', '$capacidadactual', '$capacidadmaxima')";
        if (!mysqli_query($conexion, $sql)) 
        {
          echo "Error: No se pudieron introducir los datos de Datos Marketing <br>" . mysqli_error($conexion);
        }

        $sql = "INSERT INTO DATOS_PASIVOS
        VALUES ('$capital', '$fondospropios')";
        if (!mysqli_query($conexion, $sql)) 
        {
          echo "Error: No se pudieron introducir los datos de Datos pasivos <br>" . mysqli_error($conexion);
        } 
      
        $sql = "INSERT INTO PERDIDAS_GANANCIAS
        VALUES ('$amortizaciones', '$provisiones')";
        if (!mysqli_query($conexion, $sql)) 
        {
          echo "Error: No se pudieron introducir los datos de Perdidas y ganancias <br>" . mysqli_error($conexion);
        }       
      
        $sql = "SELECT ANO, N_VENTAS FROM VARIABLES";
        $result = mysqli_query($conexion, $sql); 
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'><tr><th>AÑO</th><th>Número de ventas</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["ANO"]."</td><td>".$row["N_VENTAS"]."</td></tr>";
            }
          echo "</table>";
        }else {
          echo "No hay ningun dato de la tabla VARIABLE";
        }
        echo "<br>";

        $sql = "SELECT * FROM DATOS_ACTIVOS";
        $result = mysqli_query($conexion, $sql); 
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'><tr><th>AÑO</th><th>Beneficio bruto</th><th>Intereses</th><th>Despreciacion</th><th>Gastos Generales</th><th>Inversiones</th><th>Total activos</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["ANO"]."</td><td>".$row["Beneficio_bruto"]."</td><td>".$row["Intereses"]."</td><td>".$row["Despreciacion"]."</td><td>".$row["Gastos_Generales"]."</td><td>".$row["Inversiones"]."</td><td>".$row["TOTAL_ACTIVOS"]."</td></tr>";
            }
          echo "</table>";
        }else {
          echo "No hay ningun dato de la tabla Datos Activos";
        }

        mysqli_close($conexion);
      ?>
   <body>
 </html>
