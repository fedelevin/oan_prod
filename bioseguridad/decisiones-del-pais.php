<html>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
<script type='text/javascript' src='https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme2022/js/lib/bioseguridad.js'></script>

<body style="background-color: #fff;">

	<h1 style="text-align: center;">Autorizaciones del GNBio de Uruguay</h1>
	<h4 style="text-align: center;">Autorizaciones del GNBio referidas a la liberación de OGMs para los diferentes usos solicitados <br>(comercial, investigación, Evaluación Nacional de Cultivares, multiplicación de semilla para exportación) </h4>
	<div class="container">
		<div id="bioseguridad"></div>
	</div>

</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf-8" >
	
	bioseguridad_desiciones = GenerateRecords("decision", "uy", "es"); // Decision del país o cualquier otra comunicación.
	$("#biosegurdiad").html(bioseguridad_desiciones);
	
</script>


</html> 