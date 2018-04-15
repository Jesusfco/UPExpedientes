<?php 

$sql = "UPDATE `auxiliar_diagnostico` SET 
        `tipo_estudio` = '" . $_POST['tipo_estudio'] . "', 
        `diagno_relacion` = '" . $_POST['diagno_relacion'] . "', 
        `urgencia` = '" . $_POST['urgencia'] . "', 
        `indicaciones` = '" . $_POST['indicaciones'] . "'
        WHERE `auxiliar_diagnostico`.`id` = '" . $_GET['id'] . "'";

       

    $conn->query($sql);
    
    echo " <br> AUXILIAR DIAGNÓSTICO ACTUALIZADA correctamente <br>"; 