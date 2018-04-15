<?php

$sql = "INSERT INTO `muestra` (`id`, `user_id`, `creator_id`, 
        `tipo_muestra`, `numero_muestras`, `fec_recoleccion`, `fec_entrega`, `created_at`)
        VALUES (NULL, " . $_POST['user_id'] . ", " . $_SESSION['id'] . ", '" . $_POST['tipo_muestra'] . "', 
        " . $_POST['numero_muestras'] . ", '" . $_POST['fec_recoleccion'] . "', '" . $_POST['fec_entrega'] . "', 
        CURRENT_TIMESTAMP)";

$conn->query($sql);

echo 'MUESTRA CREADA <BR>';