<?php

$sql = "INSERT INTO `auxiliar_diagnostico` (`id`, `user_id`, `tipo_estudio`, `diagno_relacion`, `urgencia`,
 `indicaciones`, `created_at`) 
VALUES (NULL, '" . $_POST['user_id'] ."', '" . $_POST['tipo_estudio'] ."', '" . $_POST['diagno_relacion'] ."', 
'" . $_POST['urgencia'] ."', '" . $_POST['indicaciones'] ."', CURRENT_TIMESTAMP)";

$conn->query($sql);

echo 'AUXILIAR DIAGNÓSTICO CREADO <BR>';