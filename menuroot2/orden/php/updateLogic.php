<?php 

$sql = "UPDATE `receta` SET 
        `medicamento` = '" . $_POST['medicamento'] . "', 
        `unidad_medida` = '" . $_POST['unidad_medida'] . "', 
        `dosis` = '" . $_POST['dosis'] . "', 
        `frecuencia` = '" . $_POST['frecuencia'] . "',
        `via_administracion` = '" . $_POST['via_administracion'] . "',
        `fec_inicio` = '" . $_POST['fec_inicio'] . "',
        `fec_fin` = '" . $_POST['fec_fin'] . "',
        `indicaciones_ad` = '" . $_POST['indicaciones_ad'] . "'
        WHERE `receta`.`id` = '" . $_GET['id'] . "'";

       

    $conn->query($sql);
    
    echo " <br> RECETA ACTUALZIADA correctamente <br>"; 