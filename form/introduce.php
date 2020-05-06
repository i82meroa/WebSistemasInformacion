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
