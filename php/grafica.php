<?php
session_start();
  include("head.php");
  ?>
  
     
        <script src="/prueba/tianguis/chart/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="/prueba/tianguis/chart/amcharts/pie.js" type="text/javascript"></script>
         <script>
            var chart;
            var legend;
        <?php
        include_once('congrafica.php');
        $conexionSacadatos = new Conexion();
        $mysqli = $conexionSacadatos->con();
            
         $consulta = "SELECT usuario.nombre, count(*) as contador FROM usuario, producto WHERE usuario.id=producto.idvendedor group by usuario.nombre";
        $resultado = $mysqli->query($consulta);

        $prefix = '';
echo "var chartData =[\n";
while ( $fila = $resultado->fetch_row() ) {
  echo $prefix . " {\n";
  echo '  "country": "' . $fila[0] . '",' . "\n";
  echo '  "litres": ' . $fila[1] . ',' . "\n";
  echo " }";
  $prefix = ",\n";
}
echo "\n];";

?>
            


            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "litres";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;

                // WRITE
                chart.write("chartdiv");
            });
        </script>

          <div id="chartdiv" style="width: 100%; height: 400px;"></div>
        <?php
  include("pie.php");
  ?>
