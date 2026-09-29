<?php 
/* 
 * Template Name: Genérico Geoservicio
 * Description: Cargador generico de Geoservicio
*/ 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
get_header(); ?>
<?php global $theme_; ?>
<br class="clear"><br class="clear">
	<main role="main">
	


<?php

$igeo=trim($_GET["igeo"]);
//ver validacion acá. no se saben aún reglas de nomenclatura para id de servicios
if ((strlen($igeo)<8) && ($igeo!="")){ //por lopronto checkeo que tenga menos de 8 caracteres para prevenir inyeccion

//norberto
$DB_Server = "172.20.0.35";    	
$DB_Username = "metadatos"; 			
$DB_Password = "metadatos2022";    		
$DB_DBName = "metadatos";    			
$db = mysqli_connect($DB_Server, $DB_Username, $DB_Password, $DB_DBName);
//norberto




	$link = mysqli_connect("172.20.0.35", "admin_sig", "admin_sig");
	mysqli_select_db($link, "admin_sig");
	$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
	$result = mysqli_query($link, "SELECT * FROM capas WHERE activa = 1 and nombre_real = '".$igeo."' and publicar_geoservicio = 1 ORDER BY nombre_leyenda ASC;");
	//echo $igeo;
	mysqli_data_seek ($result, 0);

?>
	<h1 class="title_line text-center"><span>Detalle de GeoServicio</span></h1>
		<!-- section -->
		<section class="container-fluid background-container">	
		
				<!-- Box Info -->
				<div class="col-md-12">
					<div class="box-info container-fluid">
						<div class="info">						

				<?php 
				$i = 0;
				while ($fila = mysqli_fetch_array($result)){
				$i ++;?>

				<!-- GEOSERVICIO -->
			  	<div class="panel panel-default buscarMenu">
			    	<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			      		<div class="panel-body">
			      			<div class="col-xs-12 col-md-4 geoserv-mapa" style="cursor: pointer;" id="view<?php echo $i; ?>">
							<iframe style="width: 100%; height: 100%"; src="https://www.ambiente.gub.uy/visualizador/index.php?vis=servicios&filtro=_<?php echo $igeo; ?>" name="formularios" frameBorder="0"></iframe>
							</div>
			        		<div class="col-xs-12 col-md-8" style="font-size: 14px;">
			        			Título: <b><?php echo $fila['nombre_leyenda']; ?></b><br><br>	
Descripción: <b><?php 

								//norberto//consulto la tabla de metadatos a ver si existe un registro
								$c=0;
								$sqlm="SELECT * FROM `metadato` WHERE id_referencia='".$fila['nombre_real']."'";
								//echo sqlm;
								if ($rm=mysqli_query($db,$sqlm)){
								$c=mysqli_num_rows($rm);
								$rowm = mysqli_fetch_array($rm,MYSQLI_ASSOC);	
								mysqli_free_result($rm);
								}
								//norberto

if ($c>0){
echo utf8_encode($rowm['descripcion']); 
}


?></b><br><br>									
															
					

								<a target="_blank" href="http://www.ambiente.gub.uy/visualizador/index.php?vis=sig&filtro=_<?php echo $fila['nombre_real']; ?>" data-balloon="Ver mapa en Visualizador" data-balloon-pos="top"><img src="https://www.ambiente.gub.uy/geoservicios/img/visualizador.png" style="width:50px;margin:10px;"></a>
								<a target="_blank" class="btn-copy-text" onclick="copy_text('#copy_<?php echo $i; ?>')" data-balloon="Copiar WMS" data-balloon-pos="top"><img src="https://www.ambiente.gub.uy/geoservicios/img/wms-wfs1.png" style="width:50px;margin:10px;"></a>

								<?php if($fila['source'] != 6){ 
										if($fila['shape'] == null || $fila['shape'] == ''){ ?>
								<a target="_blank" href="https://www.ambiente.gub.uy/geoserver/u19600217/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=u19600217:<?php echo $fila['nombre_real']; ?>&outputFormat=SHAPE-ZIP" data-balloon="Descargar Shape" data-balloon-pos="top"><img src="https://www.ambiente.gub.uy/geoservicios/img/shp.png" style="width:50px;margin:10px;"></a>
								<?php }else{ ?>
								<a target="_blank" href="<?php echo $fila['shape']; ?>"><img src="img/shp.png" style="width:50px;margin:10px;"></a>
								<?php } } ?>
								<a target="_blank" href="http://www.ambiente.gub.uy/geoserver/u19600217/wms?SERVICE=WMS&VERSION=1.3.0&REQUEST=GetMap&FORMAT=image%2Fpng&TRANSPARENT=true&TILED=true&LAYERS=<?php echo $fila['nombre_real']; ?>&SRS=EPSG%3A900913&CRS=EPSG%3A3857&STYLES=&WIDTH=2881&HEIGHT=1127&BBOX=-8264590.199595602%2C-4622076.4607172385%2C-4217219.025090991%2C-3038811.166143585" data-balloon="Ver imágen .png" data-balloon-pos="top"><img src="https://www.ambiente.gub.uy/geoservicios/img/png.png" style="width:50px;margin:10px;"></a>
								<?php if($fila['source'] != 6){ ?>
								<a target="_blank" href="https://www.ambiente.gub.uy/geoserver/u19600217/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=u19600217:<?php echo $fila['nombre_real']; ?>&outputFormat=application%2Fvnd.google-earth.kml%2Bxml" data-balloon="Descargar KML" data-balloon-pos="top"><img src="https://www.ambiente.gub.uy/geoservicios/img/kml.png" style="width:50px;margin:10px;"></a>
								<?php } ?>
								
								<?php

								
								if ($c>0){
								?>
								
								<!-- a pedal -->
								<a target="_blank" href="https://www.ambiente.gub.uy/metadatos/pdf.php?idref=<?php echo $fila['nombre_real']; ?>" data-balloon="Descargar Metadatos" data-balloon-pos="top"><img src="https://www.ambiente.gub.uy/geoservicios/img/metadatos2.png" style="width:50px;margin:10px;"></a>
								<?php
								}
								?>
								
								
			        		</div>
			    		</div>
			  		</div>
			  	</div>			
			  	<!-- /GEOSERVICIO -->
				<?php } ?>	

						
						</div>
					</div>
				</div>
				<!-- Box Info -->
				
				<br class="clear">
			</article>
			<!-- /Documentos -->
<?php
}else{
	
echo '<section class="container-fluid background-container"><h1 class="title_line text-center"><span>No existen resultados para ésa capa</span></h1>';

}	
?>	

		</section>
		<!-- /section -->
	</main>
    <script>
    // Selecting the iframe element
    var iframe = document.getElementById("mdIframe");
    
    // Adjusting the iframe height onload event
    iframe.onload = function(){
        iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    }
    </script>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>