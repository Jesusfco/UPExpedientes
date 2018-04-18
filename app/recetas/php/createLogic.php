<?php

$sql = "INSERT INTO `receta` (`id`, `user_id`, `creator_id`, 
        `medicamento`, `unidad_medida`, `dosis`, `frecuencia`, 
        `via_administracion`, `fec_inicio`, `fec_fin`, 
        `indicaciones_ad`, `created_at`)
        VALUES (NULL, " . $_POST['user_id'] . ", " . $_SESSION['id'] . ", '" . $_POST['medicamento'] . "', 
        '" . $_POST['unidad_medida'] . "', '" . $_POST['dosis'] . "', '" . $_POST['frecuencia'] . "', 
        '" . $_POST['via_administracion'] . "', '" . $_POST['fec_inicio'] . "', '" . $_POST['fec_fin'] . "', 
        '" . $_POST['indicaciones_ad'] . "', CURRENT_TIMESTAMP)";

$conn->query($sql);



echo 'RECETA CREADA <BR>';