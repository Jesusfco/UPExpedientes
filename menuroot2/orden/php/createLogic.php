<?php

$sql = "INSERT INTO `orden` (`id`, `user_id`, `creator_id`, `fecha`, `tipo`, `ins_sumistro`,
        `ins_adicionales`, `destinatario`, `medicamento`, `diagnostico`, `fec_inicio`, `fec_entrega`, 
        `fec_termino`, `estado`, `prioridad`, `created_at`)
        VALUES (NULL, " . $_POST['user_id'] . ", " . $_SESSION['id'] . ", '" . $_POST['fecha'] . "', 
        '" . $_POST['tipo'] . "', '" . $_POST['ins_suministro'] . "', '" . $_POST['ins_adicionales'] . "', 
        '" . $_POST['destinatario'] . "', '" . $_POST['medicamento'] . "', '" . $_POST['diagnostico'] . "', 
        '" . $_POST['fec_inicio'] . "', '" . $_POST['fec_entrega'] . "', '" . $_POST['fec_termino'] . "',
        '" . $_POST['estado'] . "', '" . $_POST['prioridad'] . "',CURRENT_TIMESTAMP)";

        $conn->query($sql);
        // echo $sql .  "<br><br>";
echo 'ORDEN CREADA <BR>';