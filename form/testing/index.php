<?php
	include 'db_connection.php';
	$conn = OpenCon();
	echo "Connected Successfully";

	/*
	Esta parte no hace falta porque ya tenemos db_connection.php
	
	Database connection settings
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'db';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
	*/

	$Ano = array();
	$BeneficioBruto = array();
	$Impuestos = array();
	$Intereses = array();
	$Depreciacion = array();
	$GastosGenerales = array();
	$Inversiones = array();
	$TotalActivos = array();
	
	
	//PARA LA TABLA DE DATOS ACTIVOS
	$Datos_Activos="SELECT * FROM `DATOS_ACTIVOS` ";  
	$resultado = mysqli_query($conn, $Datos_Activos); 
	$pos = 0;





  //leemos datos y los ponemos en su lugar correspondiente manteniendo la relacion de posiciones
	while ($row = mysqli_fetch_array($resultado)) {
		$Ano[$pos] = $row ['ANO'];
		$BeneficioBruto[$pos] = $row ['Beneficio_bruto'];
		$Impuestos[$pos] = $row ['Impuestos'];
		$Intereses[$pos] = $row ['Intereses'];
		$Depreciacion[$pos] = $row ['Despreciacion'];
		$GastosGenerales[$pos] = $row ['Gastos_Generales'];
		$Inversiones[$pos] = $row ['Inversiones'];
		$TotalActivos[$pos] = $row ['TOTAL_ACTIVOS'];

		echo "<br>";
		echo $Ano[$pos];
		echo "<br>";
		echo $Impuestos[$pos];
		echo "<br>";
		echo $Intereses[$pos];
		echo "<br>";


		$pos = $pos + 1;


	}
	//$Cantidad = trim($Cantidad,",");
	//$Cantidad2 = trim($Cantidad2,",");

	

	$BeneficioNeto= array();
    $contador=$pos -1;
    $pos =0;

    while( $pos <= $contador){
        $BeneficioNeto[$pos] = $Impuestos[$pos] + $Intereses[$pos];
        $pos = $pos +1;
    }

	CloseCon($conn);
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
		<title>Testeo base de datos</title>

		<style type="text/css">			
			body{
				font-family: Arial;
			    margin: 80px 100px 10px 100px;
			    padding: 0;
			    color: white;
			    text-align: center;
			    background: #555652;
			}

			.container {
				color: #E8E9EB;
				background: #222;
				border: #555652 1px solid;
				padding: 10px;
			}
		</style>

	</head>

	<body>	   
	    <div class="container">	
	    <h1>USE CHART.JS WITH MYSQL DATASETS</h1>       
			<canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

			<script>
				let datos = <?php echo json_encode($BeneficioNeto);?>;
				let datos2 = <?php echo json_encode($Impuestos);?>;

				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: [1,2,3,4,5],
		            datasets: 
		            [{
		                label: 'Data 1',
		                data: [
							datos[0],
							datos[1],
							datos[2],
							datos[3],
							datos[4]
						],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            },

		            {
		            	label: 'Data 2',
		                data: [
							datos[0],
							datos[1],
							datos[2],
							datos[3],
							datos[4]
						],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 3	
		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
	    </div>
	    
	</body>
</html>