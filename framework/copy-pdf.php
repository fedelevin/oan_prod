<?php

$hostname = "172.20.10.106"; 
$username = "visualizador"; 
$password = "visualizador.2017"; 

$connection = ssh2_connect($hostname, 22); 
            
ssh2_auth_password($connection, $username, $password); 
            
$error_zip = ssh2_scp_send($connection, '/var/www/catalogo_imagenes/images/'.$upload_zip['file_name'], '/var/www/catalogo_imagenes/images/'.$upload_zip['file_name'], 0777);

//si $error_zip devuelve true entonces la copia fue realizada con exito.
