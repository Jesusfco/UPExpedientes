<?php

require_once('../../../dompdf/dompdf_config.inc.php');
include "../../php/middleware.php";
include "../../php/sql.php";

$id = $_GET['id'];                

$sql = "SELECT * FROM receta WHERE id = '" . $id . "' ";
$recetas = setUserIdCreatorId($conn->query($sql), $conn);
$obj = $recetas[0];

$HTML = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>
    <img src='../../../images/1ec3ed77-94bc-4b24-b1f9-13da8646b9f5.png'>
    <h1>Clinica David || RECETA </h1>

    <h3>PACIENTE " . $obj->user_id . "</h3>    

    <h3>DOCTOR " . $obj->creator_id . "</h3>
    

    <h3>MEDICAMENTO</h3>
    <p>" . $obj->medicamento . "</p>

    <h3>UNIDAD DE MEDIDA</h3>
    <p>" . $obj->unidad_medida . "</p>

    <h3>DOSIS</h3>
    <p>" . $obj->dosis . "</p>

    <h3>FRECUENCIA</h3>
    <p>" . $obj->frecuencia . "</p>

    <h3>VIA DE ADMINISTRACION</h3>
    <p>" . $obj->via_administracion . "</p>

    <h3>FECHA DE INICIO " . $obj->fec_inicio . "</h3>

    <h3>FECHA DE TERMINO " . $obj->fec_fin . "</h3>

    <p><strong>INDICACIONES:</strong> " . $obj->indicaciones_ad . "</p>
    

</body>
</html> ";


$HTML=utf8_encode($HTML);

$dompdf = new DOMPDF();
$dompdf->load_html($HTML);
ini_set("memory_limit", "128M");
$dompdf->render();
$dompdf->stream("RECETA " . $obj->user_id . date("Y-n-j H:i:s") . ".pdf");