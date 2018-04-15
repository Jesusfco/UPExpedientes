<?php 

$sql = "UPDATE `muestra` SET 
        `tipo_muestra` = '" . $_POST['tipo_muestra'] . "', 
        `numero_muestras` = " . $_POST['numero_muestras'] . ", 
        `fec_recoleccion` = '" . $_POST['fec_recoleccion'] . "', 
        `fec_entrega` = '" . $_POST['fec_entrega'] . "'
        WHERE `muestra`.`id` = '" . $_GET['id'] . "'";

       

    $conn->query($sql);
    
    echo " <br> MUESTRA ACTUALIZADA correctamente <br>"; 