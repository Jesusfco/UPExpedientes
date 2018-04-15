<?php 

$sql = "UPDATE `alergias` SET 
        `tipo_reaccion` = '" . $_POST['tipo_reaccion'] . "', 
        `descripcion` = '" . $_POST['descripcion'] . "', 
        `medicamento` = '" . $_POST['medicamento'] . "', 
        `fec_deteccion` = '" . $_POST['fec_deteccion'] . "'
        WHERE `alergias`.`id` = '" . $_GET['id'] . "'";

       

    $conn->query($sql);
    
    echo " <br> ALERGIA ACTUALIZADA correctamente <br>"; 