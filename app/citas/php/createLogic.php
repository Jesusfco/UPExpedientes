<?php

$sql = "INSERT INTO `citas` (`id`, `user_id`, `medico_id`, `fecha`, `hora`, `sintomas`,
        `medicamentos_admin`, `created_at`)
        VALUES (NULL, " . $_POST['user_id'] . ", " . $_POST['medico_id'] . ", '" . $_POST['fecha'] . "', 
        '" . $_POST['hora'] . "', '" . $_POST['sintomas'] . "', '" . $_POST['medicamentos_admin'] . "', 
        CURRENT_TIMESTAMP)";

        $conn->query($sql);
        // echo $sql .  "<br><br>";
echo 'CITA CREADA <BR>';