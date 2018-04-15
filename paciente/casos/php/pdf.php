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
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>
    <img src='../../../images/1ec3ed77-94bc-4b24-b1f9-13da8646b9f5.png'>
    <h1>Clinica David || CASO # " . $obj->id ." </h1>

    <h3>PACIENTE " . $obj->user_id . "</h3>    

    <h3>DOCTOR " . $obj->creator_id . "</h3>
    

    <h3>RESUMEN CLINICO</h3>
    <p>" . $obj->res_clinico . "</p>

    
    <p><strong>Fecha de Creacion:</strong> " . $obj->created_at . "</p>
    

</body>
</html> ";


$HTML=utf8_encode($HTML);

$dompdf = new DOMPDF();
$dompdf->load_html($HTML);
ini_set("memory_limit", "128M");
$dompdf->render();
$dompdf->stream("caso_" . $obj->user_id . date("Y-n-j H:i:s") . ".pdf");