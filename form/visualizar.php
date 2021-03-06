<html>
    <head>
      <title>PHP y MySQL</title>
      <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          background-color: #defffe;
        }

        td, th {
          border: 1px solid #cae8e7;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #cae8e7;
        }
        p {
            margin-left: 90%;
        }
      </style>
  </head>
  <body background="./img/img1.jpeg">
      <div>
        <p>
          <a href="index.html"><img src="./img/casa.png" alt="Menu principal" title="Menu principal" width="118" height="108"></a>
        </p>
      </div> 
      <?php
        // Creamos la conexión pasándole el servidor, nombre de user, y clave. Si no se establece conexión muestra un error.
        $conexion = mysqli_connect("68.183.213.14", "usuario", "1920", "sif_tfp","3306");
        //echo "Conexión a bd correcta <br>";
     
      //Facilitamos recogida de datos con variables sencillas
        $ejercicio=$_POST['ejercicio'];
        $Beneficio_bruto=$_POST['Beneficio_bruto'];
        $Impuestos=$_POST['Impuestos'];
        $Intereses=$_POST['Intereses'];
        $Despreciacion=$_POST['Despreciacion'];
        $Gastos_Generales=$_POST['Gastos_Generales'];
        $Ventas=$_POST['Ventas'];
        

        $sql = "SELECT * FROM VARIABLES";
        $result = mysqli_query($conexion, $sql); 
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'><tr><td BGCOLOR='#5da8a6' colspan='4'><center><h3>Variables</h3></center></td></tr><tr><th>AÑO</th><th>Número de ventas</th><th>Número de clientes potenciales</th><th>Número de ventas totales</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["ANO"]."</td><td>".$row["N_VENTAS"]."</td><td>".$row["n_clientes_potenciales"]."</td><td>".$row["N_VENTAS_TOTALES"]."</td></tr>";
            }
          echo "</table>";
        }else {
          echo "No hay ningun dato de la tabla VARIABLE";
        }
        echo "<br><br>";

        $sql = "SELECT * FROM DATOS_ACTIVOS";
        $result = mysqli_query($conexion, $sql); 
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'><tr><td BGCOLOR='#5da8a6' colspan='8'><center><h3>Datos activos</h3></center></td></tr><tr><th>AÑO</th><th>Beneficio bruto</th><th>Impuestos</th><th>Intereses</th><th>Depreciación</th><th>Gastos Generales</th><th>Inversiones</th><th>Total activos</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["ANO"]."</td><td>".$row["Beneficio_bruto"]."</td><td>".$row["Impuestos"]."</td><td>".$row["Intereses"]."</td><td>".$row["Despreciacion"]."</td><td>".$row["Gastos_Generales"]."</td><td>".$row["Inversiones"]."</td><td>".$row["TOTAL_ACTIVOS"]."</td></tr>";
            }
          echo "</table>";
        }else {
          echo "No hay ningun dato de la tabla Datos Activos";
        }
        echo "<br><br>";

        $sql = "SELECT * FROM DATOS_PASIVOS";
        $result = mysqli_query($conexion, $sql); 
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'><tr><td BGCOLOR='#5da8a6' colspan='3'><center><h3>Datos pasivos</h3></center></td></tr><tr><th>AÑO</th><th>Capital</th><th>Fondos propios</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["ANO"]."</td><td>".$row["CAPITAL"]."</td><td>".$row["FONDOS_PROPIOS"]."</td></tr>";
            }
          echo "</table>";
        }else {
          echo "No hay ningun dato de la tabla DATOS_PASIVOS";
        }
        echo "<br><br>";

        $sql = "SELECT * FROM DATOS_MARKETING";
        $result = mysqli_query($conexion, $sql); 
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'><tr><td BGCOLOR='#5da8a6' colspan='5'><center><h3>Datos Marketing</h3></center></td></tr><tr><th>AÑO</th><th>Clics</th><th>Impresiones</th><th>Capacidad actual</th><th>Capacidad máxima</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["ANO"]."</td><td>".$row["Clics"]."</td><td>".$row["Impresiones"]."</td><td>".$row["CAPACIDAD_ACTUAL"]."</td><td>".$row["CAPACIDAD_MAXIMA"]."</td></tr>";
            }
          echo "</table>";
        }else {
          echo "No hay ningun dato de la tabla DATOS_MARKETING";
        }
        echo "<br><br>";

        $sql = "SELECT * FROM PERDIDAS_GANANCIAS";
        $result = mysqli_query($conexion, $sql); 
        if (mysqli_num_rows($result) > 0) {
          echo "<table border='1'><tr><td BGCOLOR='#5da8a6' colspan='3'><center><h3>Pérdidas y ganancias</h3></center></td></tr><tr><th>AÑO</th><th>Amortizaciones</th><th>Provisiones</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["ANO"]."</td><td>".$row["Amortizaciones"]."</td><td>".$row["Provisiones"]."</td></tr>";
            }
          echo "</table>";
        }else {
          echo "No hay ningun dato de la tabla PERDIDAS_GANANCIAS";
        }
        echo "<br><br>";


        mysqli_close($conexion);
      ?>
   <body>
 </html>
