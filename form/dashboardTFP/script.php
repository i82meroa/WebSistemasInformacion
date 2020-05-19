<?php
	include 'db_connection.php';
	$conn = OpenCon();
	echo "Connected Successfully";


  $Ano = array();
  $BeneficioBruto = array();
  $Impuestos = array();
  $Intereses = array();
  $Depreciacion = array();
  $GastosGenerales = array();
  $Inversiones = array();
  $TotalActivos = array();

  $Capital = array();
  $FondosPropios = array();


  $Clics = array();
  $Impresiones = array();
  $CapacidadActual = array();
  $CapacidadMaxima = array();


  $NVentas = array();
  $NClientesPotenciales = array();
  $NVentasTotales = array();
 
  
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
      $pos = $pos + 1;
  }

  //PARA LA TABLA DE DATOS PASIVOS
  $Datos_Pasivos="SELECT * FROM `DATOS_PASIVOS` ";
  $resultado2 = mysqli_query($conn, $Datos_Pasivos); 
  $pos = 0;

  while ($row = mysqli_fetch_array($resultado2)) {
      $Ano[$pos] = $row ['ANO'];
      $Capital[$pos] = $row ['CAPITAL'];
      $FondosPropios[$pos] = $row ['FONDOS_PROPIOS'];
      $pos = $pos + 1;
  }

  //PARA LA TABLA DE DATOS MARKETING
  $Datos_Marketing="SELECT * FROM `DATOS_MARKETING` ";
  $resultado3 = mysqli_query($conn, $Datos_Marketing); 
  $pos = 0;

  while ($row = mysqli_fetch_array($resultado3)) {
      $Ano[$pos] = $row ['ANO'];
      $Clics[$pos] = $row ['Clics'];
      $Impresiones[$pos] = $row ['Impresiones'];
      $CapacidadActual[$pos] = $row ['CAPACIDAD_ACTUAL'];
      $CapacidadMaxima[$pos] = $row ['CAPACIDAD_MAXIMA'];
      $pos = $pos + 1;
  }

  //PARA LA TABLA DE PERDIDAS GANANCIAS
  $Perdidas_Gananacias="SELECT * FROM `PERDIDAS_GANANCIAS` ";
  $resultado4 = mysqli_query($conn, $Perdidas_Gananacias);
  $pos = 0;

  while ($row = mysqli_fetch_array($resultado4)) {
      $Ano[$pos] = $row ['ANO'];
      $Amortizaciones[$pos] = $row ['Amortizaciones'];
      $Provisiones[$pos] = $row ['Provisiones'];
      $pos = $pos + 1;
  }


  //PARA LA TABLA DE VARIABLES
  $Variables="SELECT * FROM `VARIABLES` ";
  $resultado5 = mysqli_query($conn, $Variables);
  $pos = 0;

  while ($row = mysqli_fetch_array($resultado5)) {
      $Ano[$pos] = $row ['ANO'];
      $NVentas[$pos] = $row ['N_VENTAS'];
      $NClientesPotenciales[$pos] = $row ['n_clientes_potenciales'];
      $NVentasTotales[$pos]= $row ['N_VENTAS_TOTALES'];
      $pos = $pos + 1;
  }



////////////// A PARTIR DE AQUI VAN LOS CALCULOS DE LOS KPIS ////////////////////

  $BeneficioNeto= array();
  $contador=$pos -1;
  $pos =0;

  while( $pos <= $contador){
      $BeneficioNeto[$pos]= $BeneficioBruto[$pos] - $Impuestos[$pos] - $Intereses[$pos] - $Depreciacion[$pos] - $GastosGenerales[$pos];
      $pos = $pos +1;
  }


  $MargenNeto= array();
  $pos = 0;

  while( $pos <= $contador){
      $MargenNeto[$pos]= $BeneficioNeto[$pos] / $NVentas[$pos];
      $pos = $pos + 1;
  }


  $EBITDA= array();
  $pos=0;

  while( $pos <= $contador){
      $EBITDA[$pos]= $BeneficioBruto[$pos] + $Provisiones[$pos] + $Amortizaciones[$pos];
      $pos = $pos + 1;
  }


  $CTR= array();
  $pos=0;

  while( $pos <= $contador){
      $CTR[$pos]= ($Clics[$pos] / $Impresiones[$pos]) * 100 ;
      $pos = $pos + 1;
  }


  $CPL= array();
  $pos=0;

  while( $pos <= $contador){
      $CPL[$pos]= $Inversiones[$pos] / $NClientesPotenciales[$pos];
      $pos = $pos + 1;
  }


  $CuotaMercado= array();
  $pos=0;

  while( $pos <= $contador){
      $CuotaMercado[$pos]= $NVentas[$pos] / $NVentasTotales[$pos];
      $pos = $pos + 1;
  }


  $ROCE= array();
  $pos=0;

  while( $pos <= $contador){
      $ROCE[$pos]= ($BeneficioBruto[$pos] / $Capital[$pos]) * 100;
      $pos = $pos + 1;
  }


  $ROA= array();
  $pos=0;

  while( $pos <= $contador){
      $ROA[$pos]= $BeneficioNeto[$pos] / $TotalActivos[$pos];
      $pos = $pos + 1;
  }


  $ROE= array();
  $pos=0;

  while( $pos <= $contador){
      $ROE[$pos]= $BeneficioNeto[$pos] / $FondosPropios[$pos];
      $pos = $pos + 1;
  }


  $CUR= array();
  $pos=0;

  while( $pos <= $contador){
      $CUR[$pos]= ($CapacidadActual[$pos] / $CapacidadMaxima[$pos]) * 100;
      $pos = $pos + 1;
  }

	CloseCon($conn);
?>











<script>
$(document).ready(function() { //Esta línea escrita en jQuery quiere decir que lo que haga la función debe realizarse cuando la página web esté completamente cargada y lista.
  $('[data-toggle="tooltip"]').tooltip(); //Esta línea de la API de bootstrap quiere decir que se inicialicen todos los tooltips, que son esos pop up que aparecen cuando el usuario pasa el ratón por algún elemento de la página web.
});



//Esta parte es para los charts.
let myChart1 = document.getElementById('myChart1').getContext('2d');


let beneficioneto = <?php echo json_encode($BeneficioNeto);?>;

// Global Options
Chart.defaults.global.defaultFontFamily = 'Montserrat';
Chart.defaults.global.defaultFontSize = 13;
Chart.defaults.global.defaultFontColor = '#111';

let espPopChart1 = new Chart(myChart1, {
  type:'line', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [
      { 
        data: [
						  beneficioneto[0],
							beneficioneto[1],
							beneficioneto[2],
              beneficioneto[3],
              beneficioneto[4],
              beneficioneto[5]
						],
        label: "Beneficio Neto",
        borderColor: "rgba(255, 99, 132, 0.6)",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Beneficio Neto (en euros)',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});


//-------------------------------------------


//Esta parte es para los charts.
let myChart2 = document.getElementById('myChart2').getContext('2d');
let margenneto = <?php echo json_encode($MargenNeto);?>;

let espPopChart2 = new Chart(myChart2, {
  type:'bar', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [
      {
        data: [
							margenneto[0],
							margenneto[1],
							margenneto[2],
              margenneto[3],
              margenneto[4],
              margenneto[5]
						],
        label: "Margen Neto",
        backgroundColor:[
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)'
      ]
        
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Margen Neto',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});


//-------------------------------------------------


let myChart3 = document.getElementById('myChart3').getContext('2d');
let ebitda = <?php echo json_encode($EBITDA);?>;

let espPopChart3 = new Chart(myChart3, {
  type:'line', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [
      {
        
        data: [
							ebitda[0],
							ebitda[1],
							ebitda[2],
              ebitda[3],
              ebitda[4],
              ebitda[5]
						],
        label: "EBITDA",
        borderColor: "rgba(54, 162, 235, 0.6)",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'EBITDA',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});




//--------------------------------------------------------------


let myChart4 = document.getElementById('myChart4').getContext('2d');
let ctr = <?php echo json_encode($CTR);?>;


let espPopChart4 = new Chart(myChart4, {
  type:'horizontalBar', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [
      {
        label: "CTR",
        backgroundColor:[
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)'
      ],
        data: [
							ctr[0],
							ctr[1],
							ctr[2],
              ctr[3],
              ctr[4],
              ctr[5]
						]
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'CTR ANUAL',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});


//-------------------------------------------------


let myChart5 = document.getElementById('myChart5').getContext('2d');
let cpl = <?php echo json_encode($CPL);?>;

let espPopChart5 = new Chart(myChart5, {
  type:'horizontalBar', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [{
      label: "CPL",
      backgroundColor:[
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)'
      ],
      data: [
							cpl[0],
							cpl[1],
							cpl[2],
              cpl[3],
              cpl[4],
              cpl[5]
						]
    }]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'CPL ANUAL',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});



//------------------------------------------------------------


//Esta parte es para los charts.
let myChart6 = document.getElementById('myChart6').getContext('2d');
let cuotamercado = <?php echo json_encode($CuotaMercado);?>;

let espPopChart6 = new Chart(myChart6, {
  type:'bar', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [
      {
        data: [
							cuotamercado[0],
							cuotamercado[1],
							cuotamercado[2],
              cuotamercado[3],
              cuotamercado[4],
              cuotamercado[5]
						],
        label: "Cuota Mercado",
        backgroundColor:[
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)'
      ]
        
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Cuota de Mercado',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});


//-------------------------------------------


//Esta parte es para los charts.
let myChart7 = document.getElementById('myChart7').getContext('2d');
let roce = <?php echo json_encode($ROCE);?>;

let espPopChart7 = new Chart(myChart7, {
  type:'line', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [
      { 
        data: [
						  roce[0],
							roce[1],
							roce[2],
              roce[3],
              roce[4],
              roce[5]
						],
        label: "ROCE",
        borderColor: "rgba(153, 102, 255, 0.6)",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'ROCE',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});


//-------------------------------------------------


let myChart8 = document.getElementById('myChart8').getContext('2d');
let roa = <?php echo json_encode($ROA);?>;

let espPopChart8 = new Chart(myChart8, {
  type:'bar', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [
      {
        label: "ROA",
        backgroundColor:[
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)'
      ],
        data: [
          roa[0],
          roa[1],
          roa[2],
          roa[3],
          roa[4],
          roa[5]
				]
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'ROA',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});




//--------------------------------------------------------------


let myChart9 = document.getElementById('myChart9').getContext('2d');
let roe = <?php echo json_encode($ROE);?>;

let espPopChart9 = new Chart(myChart9, {
  type:'line', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [
      { 
        data: [
						  roe[0],
							roe[1],
							roe[2],
              roe[3],
              roe[4],
              roe[5]
						],
        label: "ROE",
        borderColor: "rgba(255, 99, 132, 0.6)",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'ROE',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});


//-------------------------------------------------


let myChart10 = document.getElementById('myChart10').getContext('2d');
let cur = <?php echo json_encode($CUR);?>;

let espPopChart10 = new Chart(myChart10, {
  type:'bar', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: ["2015","2016","2017","2018","2019", "2020"],
    datasets: [
      {
        data: [
							cur[0],
							cur[1],
							cur[2],
              cur[3],
              cur[4],
              cur[5]
						],
        label: "CUR",
        backgroundColor:[
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)'
      ],
        
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'CUR',
      fontSize:15
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});






let myChart10 = document.getElementById('myChart10').getContext('2d');
let cur = <?php echo json_encode($CUR);?>;

let espPopChart10 = new Chart(myChart10, {
  type:'bubble', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data: {
    labels: "Africa",
    datasets: [
      {
        label: ["2015"],
        backgroundColor: "rgba(255,221,50,0.2)",
        borderColor: "rgba(255,221,50,1)",
        data: [{
          x: 2015,
          y: cur[0],
          r: 15
        }]
      }, {
        label: ["2016"],
        backgroundColor: "rgba(60,186,159,0.2)",
        borderColor: "rgba(60,186,159,1)",
        data: [{
          x: 2016,
          y: cur[1],
          r: 20
        }]
      }, {
        label: ["2017"],
        backgroundColor: "rgba(0,0,0,0.2)",
        borderColor: "#000",
        data: [{
          x: 2017,
          y: cur[2],
          r: 35
        }]
      }, {
        label: ["2018"],
        backgroundColor: "rgba(193,46,12,0.2)",
        borderColor: "rgba(193,46,12,1)",
        data: [{
          x: 2018,
          y: cur[3],
          r: 40
        }]
      }, {
        label: ["2019"],
        backgroundColor: "rgba(0,0,0,0.2)",
        borderColor: "#000",
        data: [{
          x: 2019,
          y: cur[4]
          r: 30
        }]
      }, {
        label: ["2020"],
        backgroundColor: "rgba(193,46,12,0.2)",
        borderColor: "rgba(193,46,12,1)",
        data: [{
          x: 2020,
          y: cur[],
          r: 65
        }]
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Predicted world population (millions) in 2050',
      fontSize:15
    }, scales: {
      yAxes: [{ 
        scaleLabel: {
          display: true,
          labelString: "Happiness"
        }
      }],
      xAxes: [{ 
        scaleLabel: {
          display: true,
          labelString: "GDP (PPP)"
        }
      }]
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});


/*
ESTO ES UNA DEMO

let myChart8 = document.getElementById('myChart8').getContext('2d');

let espPopChart8 = new Chart(myChart8, {
  type:'bubble', //line, bar, radar, horizontalBar, pie, doughnut, polarArea, bubble, scatter
  data:{
    labels:['Madrid', 'Barcelona', 'Sevilla', 'Valencia', 'Zaragoza', 'Toledo'],
    datasets:[{
      label:'Población',
      data:[
        1266126,
        936762,
        688592,
        794288,
        674997,
        348730
      ],
      //backgroundColor:'green',
      backgroundColor:[
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)'
      ],
      borderWidth:0.5,
      borderColor:'#111',
      hoverBorderWidth:2,
      hoverBorderColor:'#111'
    }]
  },
  options:{
    title:{
      display:true,
      text:'Algunas poblaciones de España',
      fontSize:15
    },
    legend:{
      display:true,
      position:'top',
      labels:{
        fontColor:'#111'
      }
    },
    layout:{
      padding:{
        left:0,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});

*/


</script>