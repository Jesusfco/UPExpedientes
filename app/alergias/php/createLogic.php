<?php

$sql = "INSERT INTO `alergias` (`id`, `user_id`, `tipo_reaccion`, `descripcion`, `medicamento`, `fec_deteccion`, `created_at`) 
VALUES (NULL, '" . $_POST['user_id'] ."', '" . $_POST['tipo_reaccion'] ."', '" . $_POST['descripcion'] ."', 
'" . $_POST['medicamento'] ."', '" . $_POST['fec_deteccion'] ."', CURRENT_TIMESTAMP)";

$conn->query($sql);

echo 'ALERGIA CREADA <BR>';