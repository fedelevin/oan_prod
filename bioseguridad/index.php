<html>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
<script type='text/javascript' src='https://www.dinama.gub.uy/oan/wp-content/themes/observatorio-theme4/js/lib/bioseguridad.js'></script>

<body style="background-color: #fff;">

	<h1 style="text-align: center;">Bioseguridad</div>
	<div class="container">
		<div id="bioseguridad"></div>
	</div>

</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf-8" >
	
	bioseguridad_desiciones = GenerateRecords("decision", "uy", "es"); // Decision del país o cualquier otra comunicación.
	bioseguridad_evaluacion_riesgo = GenerateRecords("riskAssessment", "uy", "es");//Evaluación del Riesgo.
	$("#biosegurdiad").html(bioseguridad_desiciones);
	
</script>


</html> 