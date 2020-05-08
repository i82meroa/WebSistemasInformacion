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
        $conexion = mysqli_connect($servername, $username, $password, $bd);
        echo "Conección a bd correcta";
        
      ?>
   <body>
 </html>
