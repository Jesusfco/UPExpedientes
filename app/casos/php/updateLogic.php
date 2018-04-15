<?php 

$sql = "UPDATE `casos_notificables` SET 
        `res_clinico` = '" . $_POST['res_clinico'] . "', 
        `desc_acciones` = '" . $_POST['desc_acciones'] . "', 
        `riesgos` = '" . $_POST['riesgos'] . "'        
        WHERE `casos_notificables`.`id` = '" . $_GET['id'] . "'";

       

    $conn->query($sql);
    
    echo " <br> CASO NOTIFICABLE ACTUALIZADO correctamente <br>"; 