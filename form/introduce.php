<html>
    <head>
      <title>PHP y MySQL</title>
  </head>
  <body>
      <?php
        echo "Estoy aqui";
        $servername="68.183.213.14";
        $username="juanfran";
        $password="123";
        $bd="sif_tfp";
        echo "Segundo echo OK";
        // Creamos la conexión pasándole el servidor, nombre de user, y clave. Si no se establece conexión muestra un error.
        //$conexion = mysqli_connect($servername, $username, $password, $bd);
        $mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        echo "Conección a bd correcta";
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
        mysqli_close($conexion);
      ?>
   <body>
 </html>
