<?php

$sql = "INSERT INTO `casos_notificables` (`id`, `user_id`, `creator_id`, `res_clinico`, `desc_acciones`, `riesgos`, `created_at`) 
VALUES (NULL, '" . $_POST['user_id'] ."', '" . $_SESSION['id'] ."', '" . $_POST['res_clinico'] ."', 
'" . $_POST['desc_acciones'] ."', '" . $_POST['riesgos'] ."', CURRENT_TIMESTAMP)";

$conn->query($sql);

echo 'ALERGIA CREADA <BR>';