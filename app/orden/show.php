<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || USUARIOS </title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <div class="header">
        <div class="centrar">
            <img src="../../images/logo2.png">
            
            <h1>Registros Clínica David</h1>
        </div>
    </div>


        <div class="containerP">
            <div class="menu">
                <a href="index.php">REGRESAR</a>
                <?php include "menu.php" ?>
            </div>

            <?php 
                include "../php/middleware.php";
                include "../php/sql.php";                                                 

                $id = $_GET['id'];
                $sql = "SELECT * FROM orden WHERE id = '" . $id . "' ";              

                $sql = "SELECT * FROM orden WHERE id = '" . $id . "' ";

                $obj = setUserIdCreatorId($conn->query($sql), $conn);

                $obj = $obj[0];
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>VER ORDEN #<?php echo $obj->id; ?></h2>

                <form>

                

                <label>PACIENTE</label><br>
                <input type="TEXT" name="user_id" value="<?php echo $obj->user_id; ?>" disabled><br>

                <label>DOCTOR</label><br>
                <input type="text" name="medicamento" value="<?php echo $obj->creator_id; ?>" disabled><br>

                <label>FECHA</label><br>
                <input type="text" name="unidad_medida" value="<?php echo $obj->fecha; ?>" disabled><br>

                <label>TIPO</label><br>
                <input type="text" name="dosis" value="<?php echo $obj->tipo; ?>" disabled><br>

                <h5>Instrucciones de suministro:</h5>
                <p><?php echo $obj->ins_sumistro; ?></p>

                <h5>Instrucciones de Adicionales:</h5>
                <p><?php echo $obj->ins_adicionales; ?></p>

                <label>DESTINATARIO</label><br>
                <input type="text" name="dosis" value="<?php echo $obj->destinatario; ?>" disabled><br>

                <label>MEDICAMENTO</label><br>
                <input type="text" name="dosis" value="<?php echo $obj->medicamento; ?>" disabled><br>

                <h5>DIAGNOSTICO:</h5>
                <p><?php echo $obj->diagnostico; ?></p>

                <label>FECHA DE INICIO</label><br>
                <input type="text" name="dosis" value="<?php echo $obj->fec_inicio; ?>" disabled><br>

                <label>FECHA DE ENTREGA</label><br>
                <input type="text" name="dosis" value="<?php echo $obj->fec_entrega; ?>" disabled><br>

                <label>FECHA DE TERMINO</label><br>
                <input type="text" name="dosis" value="<?php echo $obj->fec_termino; ?>" disabled><br>

                <label>PRIODIODAD</label><br>
                <input type="text" name="dosis" value="<?php echo $obj->prioridad; ?>" disabled><br>

                <label>FECHA/HORA DE CREACION DE REGISTRO</label><br>
                <input type="text" name="dosis" value="<?php echo $obj->created_at; ?>" disabled><br>

                

                

                

                
            </form>

        
            </div>
        </div>
    
    </body>
</html>