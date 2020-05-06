<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inserción  de vivienda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
    <body>
<?php
include 'conexion.php';
?>

<div class="menu">
  <div class="text-center">
    <div class="btn-group" role="group" aria-label="...">
  </div>
</div>


<?php
#Abrimos conexion con mysql
include 'conexion.php';
?>
  
<?php
        <div class="container">
        <H1>Inserción de vivienda</H1><BR>
            <form name="vivienda" action="proyecto.php" method="POST" enctype="multipart/form-data">
            <fieldset>
              <legend>Rellene el formulario</legend></br>
                  <div >
                  <div>
                    <label for="tipo">*Tipo de vivienda:</label>
                    <select id="tipo" name="tipo">
                        <option selected="selected" value="selected">-seleccione-</option>
<!-- Hacemos una consulta a todos los tipos en mysql -->                                                   
                    </select>
 
             </div><br>

            <div>
                <label for="zona">*Zona:</label>
                    <select id="zona" name="zona">
                        <option selected="selected" value="selected">-seleccione-</option>                                               
                    </select>
            </div><br>
         <br>

            <div>
                <label for="direccion">*Dirección:</label>
                    <input type="text"                 
                    <?php
                    //Si direccion se rellena se crea una opcion HTML de value=cadena de direccion metida
                    if (isset($_REQUEST['enviar']))
                      {
                        if($_REQUEST['direccion']!=="")
                        {
                         echo "value='$_REQUEST[direccion]'";
                        }
                      }
                    ?>  
                    name="direccion" size="30" maxlength="50" placeholder="Introduzca la direccion">
   
                </div>            
                <br><br>

         
                 <div>
                    <label for="precio">*Precio:</label>
                    <input type="text"  
                    <?php
                    //Comprobamos que el precio es correcto
                    if(isset($_REQUEST['enviar']))
                    {
                      //Debe estar relleno y ser un numero
                      if (($_REQUEST['precio']!=="") and (is_numeric($_REQUEST['precio'])))
                      {
                        echo "value='$_REQUEST[precio]'";
                      }
                    }
                    //Ejemplo de que ésto no se puede hacer porque sigo dentro de la etiqueta.
                    //Debo poner el mensaje de error fuera del campo.
                    /*else 
                      {
                        echo "<font color='red'>Se requiere el precio de vivienda.</font><br>";
                      }*/
                       
                    ?>name="precio" size="30" maxlength="12" placeholder="Introduzca el precio">€
                    <?php
                    if(isset($_REQUEST['enviar']))
                    {
                      if ($_REQUEST['precio']=="")
                      {
                        echo "<font color='red'>Se requiere el precio de vivienda.</font><br>";
                      }
                      else
                      {
                        if (!is_numeric($_REQUEST['precio']))
                        {
                          echo "<font color='red'>El precio debe ser un valor numérico.</font><br>";
                        }
                      }
                    }
                    ?><BR><BR>
                </div><BR>

                <div>
                    <label for="tamano">*Tamaño:</label>
                    <input type="text" 
                    <?php
                    //Comprobamos que el tamaño es correcto
                    if(isset($_REQUEST['enviar']))
                    {
                      //Debe estar relleno y ser un numero
                      if (($_REQUEST['tamano']!=="") and (is_numeric($_REQUEST['tamano'])))
                      {
                        echo "value='$_REQUEST[tamano]'";
                      }
                    }
                       
                    ?> name="tamano" size="30" maxlength="12" placeholder="Introduzca tamaño">metros cuadrados
                    <?php
                    if(isset($_REQUEST['enviar']))
                    {
                      if ($_REQUEST['tamano']=="")
                      {
                        echo "<font color='red'>Se requiere el tamaño de vivienda.</font><br>";
                      }
                      else
                        /* PARA QUE NO SALGAN LOS DOS MENSAJES DE ERROR (VACIO Y CADENA) LO QUE HAGO ES UN IF REVISANDO EL DE VACIO.
                      SI SE INTRODUCE (ELSE) ENTONCES REVISA SI ES NUMERICO*/
                      {
                        if (!is_numeric($_REQUEST['tamano']))
                        {
                          echo "<font color='red'>El tamaño debe ser un valor numérico.</font><br>";
                        }
                      }
                    }
                    ?><BR><BR>
                </div><BR>

               

 
            <input type="submit" name="enviar" id="enviar" class="btn btn-default" value="Insertar vivienda">
            
            </div>
            </fieldset>

            </form>
        

            </div>
<?php
        //Facilitamos recogida de datos con variables sencillas
$direccion=$_REQUEST['direccion'];
$precio=$_REQUEST['precio'];
$tamano=$_REQUEST['tamano'];
$dormitorios=$_REQUEST['dormitorios'];
$observaciones=$_REQUEST['observaciones'];
$zona=$_REQUEST['zona'];
$tipo=$_REQUEST['tipo'];

//Insercion de datos
$sql = "INSERT INTO inmuebles (direccion, precio, tamano, num_dorm, observaciones, zona, tipo)
VALUES ('$direccion', '$precio', '$tamano', '$dormitorios', '$observaciones', '$zona','$tipo')";

if (mysqli_query($conexion, $sql)) 
{
  echo "<font color='green'>Registro añadido correctamente.</font>";
} 
else 
{
  echo "Error: No se pudieron introducir los datos.<br>" . mysqli_error($conexion);
}

$sacarid = "SELECT max(id) as ultimaid from inmuebles";
$resultado = mysqli_query($conexion,$sacarid);
$fila = mysqli_fetch_assoc($resultado);

         $enlace='/PHP/imagenes/'; //media ruta ya que DocumentRoot apunta hasta /var/www/IAW/
          for ($i = 0; $i < count($_FILES["archivo"]["name"]); $i++)
            {
              $nombre_real=$_FILES["archivo"]["name"][$i];
              $nombre_temporal=$_FILES["archivo"]["tmp_name"][$i];
                //Carpeta donde se guardarán las imagenes subidas y válidas
              $carpeta='/var/www/IAW/PHP/imagenes';
                //Se abre el directorio de subida
              $dir=opendir($carpeta);
              $ruta=$carpeta.'/'.$nombre_real; //Es la ruta completa: /var/www/IAW/PHP/imagenes/nombrearchivo
              move_uploaded_file($nombre_temporal, $ruta);
              closedir($dir);
              $insercion = "INSERT INTO imagenes values (null,'".$ruta."','".$fila['ultimaid']."')";
              mysqli_query($conexion,$insercion);
            }
            for ($i = 0; $i < count($extra); $i++)
            {
            $insercionextras= "INSERT INTO inmuebles_extras values ('".$fila['ultimaid']."',".$extra[$i].");";
            mysqli_query($conexion,$insercionextras);
            }

//Fin del bucle de imagenes

mysqli_close($conexion);






      }
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </body>
</html>
