<?php

require_once('../../../dompdf/dompdf_config.inc.php');
include "../../php/middleware.php";
include "../../php/sql.php";

$id = $_GET['id'];                

$sql = "SELECT * FROM casos_notificables WHERE id = '" . $id . "' ";
$array = setUserIdCreatorId($conn->query($sql), $conn);
$obj = $array[0];

$HTML = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>
   <img style='float:right; margin:10px;' src='../../../images/logo2.png'/> SECRETARIA DE SALUD DE CHIAPAS
    <hr>

    <h6 align='left'>PACIENTE: " . $obj->user_id . "</h6>    

    <h6 align='right'>DOCTOR: " . $obj->creator_id . "</h6>
   

<TABLE BORDER WIDTH='100%' HEIGHT='50%'>
<Tr bgcolor=#AED6F1  align='center'> 
<Td>RESUMEN CLINICO</Td><Td align='justify'> CASO # " . $obj->id ."</Td>
</Tr>
<tr>
<th colspan='2' scope='rowgroup' align='justify'>" . $obj->res_clinico . "</th>
</tr>
<br>
<br>
<br>
<br>
<br>
    <p><strong>Fecha de Creacion:</strong> " . $obj->created_at . "</p>
    <br>
    <br>
    <br>


</body>
</html> ";


// $HTML=utf8_encode($HTML);

$dompdf = new DOMPDF();
$dompdf->load_html($HTML, 'UTF-8');
ini_set("memory_limit", "128M");
$dompdf->render();
$dompdf->stream("caso_" . $obj->id . ".pdf");