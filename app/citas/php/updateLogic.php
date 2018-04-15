<?php 

$sql = "UPDATE `citas` SET 
        `fecha` = '" . $_POST['fecha'] . "', 
        `hora` = '" . $_POST['hora'] . "', 
        `sintomas` = '" . $_POST['sintomas'] . "', 
        `medicamentos_admin` = '" . $_POST['medicamentos_admin'] . "'
        WHERE `citas`.`id` = '" . $_GET['id'] . "'";

       

    $conn->query($sql);
    // echo $sql;
    
    echo " <br> CITA ACTUALZIADA correctamente <br>"; 