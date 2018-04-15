<?php 

$sql = "UPDATE `orden` SET 
        `fecha` = '" . $_POST['fecha'] . "', 
        `tipo` = '" . $_POST['tipo'] . "', 
        `ins_sumistro` = '" . $_POST['ins_sumistro'] . "', 
        `ins_adicionales` = '" . $_POST['ins_adicionales'] . "',
        `destinatario` = '" . $_POST['destinatario'] . "',
        `medicamento` = '" . $_POST['medicamento'] . "',
        `diagnostico` = '" . $_POST['diagnostico'] . "',
        `fec_inicio` = '" . $_POST['fec_inicio'] . "',
        `fec_entrega` = '" . $_POST['fec_entrega'] . "',
        `fec_termino` = '" . $_POST['fec_termino'] . "',
        `estado` = '" . $_POST['estado'] . "',
        `prioridad` = '" . $_POST['prioridad'] . "'
        WHERE `orden`.`id` = '" . $_GET['id'] . "'";

       

    $conn->query($sql);
    // echo $sql;
    
    echo " <br> ORDEN ACTUALZIADA correctamente <br>"; 