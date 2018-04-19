<?php

require_once('../../../dompdf/dompdf_config.inc.php');

include "../../../php/sql.php";
include "../../php/middleware.php";

$id = $_GET['id'];                

$sql = "SELECT * FROM receta WHERE id = '" . $id . "' ";
$recetas = setUserIdCreatorId($conn->query($sql), $conn);
$obj = $recetas[0];

$HTML = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>
   
    <img style='float:right; margin:10px;' src='../../../images/logo2.png'/> SECRETARIA DE SALUD DE CHIAPAS
    <hr>
    <br>


    <h3><font color='#616A6B'> NOMBRE DEL PACIENTE: " . $obj->user_id . "</font></h3>    
     <h3><font color='#616A6B'>FECHA DE INICIO: " . $obj->fec_inicio . "</font></h3>

    <h3><font color='#616A6B'>FECHA DE TERMINO: " . $obj->fec_fin . "</font></h3>
    <br>
    <br>
    PLAN TERAPEUTICO

<table border bgcolor=#AED6F1>
<Tr> <Td>MEDICAMENTO</Td><Td> UNIDAD DE MEDIDA</Td><Td> DOSIS</Td><Td>FRECUENCIA</Td><Td>VIA DE ADMINISTRACION</Td></Tr>

<Tr bgcolor=#F7F9F9  align='center'> 
<Td>" . $obj->medicamento . "</Td><Td>" . $obj->unidad_medida . "</Td><Td>" . $obj->dosis . "</Td><Td>" . $obj->frecuencia . "</Td><Td>" . $obj->via_administracion . "</Td>
</Tr>
<Tr bgcolor=#F7F9F9>
 <Td>         </Td><Td>        </Td><Td>      </Td><Td>     </Td><Td>    </Td>
 </Tr>

</table>

<br>
<br>
   

    <p> <font color='#616A6B'><strong>INDICACIONES:</strong> " . $obj->indicaciones_ad . "</font></p>

<br>
<br>
<br>
<br>
<br>
    
    <h3 align='right'><font color='#2980B9 '>DR: " . $obj->creator_id . "</h3>
    

</body>
</html> ";


// $HTML=utf8_encode($HTML);

$dompdf = new DOMPDF();
$dompdf->load_html($HTML, 'UTF-8');
ini_set("memory_limit", "128M");
$dompdf->render();
$dompdf->stream("RECETA " . $obj->user_id . "-". $obj->id . ".pdf");