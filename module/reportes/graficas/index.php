<?php
require_once "conexion.php";
	$conexion=conexion();
	$sql="SELECT nombreProd,cantidadDisp 
			from producto order by cantidadDisp";
	$result=mysqli_query($conexion,$sql);
	$valoresY=array();//cant
	$valoresX=array();//name

	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);
?>
<head>
    	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="librerias/plotly-latest.min.js"></script>
</head>
<div id="graficaBarras"></div>
<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<script type="text/javascript">
	function crearCadenaBarras(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>


<script type="text/javascript">

	datosX=crearCadenaBarras('<?php echo $datosX ?>');
	datosY=crearCadenaBarras('<?php echo $datosY ?>');

	var trace1 = {
        
        type: 'bar',
		x: datosX,
		y: datosY,
        marker: {
      color: '#339999',
      line: {
          width: 1.5
      }}
	};

	var data = [trace1];
    var layout = { 
  title: 'Cantidad de Productos',
  font: {size: 16}
};
var config = {responsive: true}

	Plotly.newPlot('graficaBarras', data, layout, config);
</script>