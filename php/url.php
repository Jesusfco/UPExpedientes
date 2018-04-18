<?php 

$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";

//NOMBRE DE CARPETA EN CASO DE NO ENCONTRARSE EN LA CARPETA RAIZ
//SI SE ENCUENTRA EN LA CARPETA RAIZ COMENTAR SIGUIENTE LINEA
$url .= 'UPExpedientes/';

// echo $url;