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
                $sql = "SELECT * FROM citas WHERE id = '" . $id . "' ";              
                
                $res = $conn->query($sql);
                $obj = doctorId($conn->query($sql), $conn);
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>VER CITA</h2>

                <form>

                

                <label>USUARIO</label><br>
                <input type="text" name="user_id" value="<?php echo $obj[0]->user_id; ?>" disabled><br>

                <label>MEDICO</label><br>
                <input type="text" name="user_id" value="<?php echo $obj[0]->medico_id; ?>" disabled><br>

                <label>FECHA</label><br>
                <input type="text" name="medicamento" value="<?php echo $obj[0]->fecha; ?>" disabled><br>

                <label>HORA</label><br>
                <input type="text" name="unidad_medida" value="<?php echo $obj[0]->hora; ?>" disabled><br>

                <h5>Sintomas:</h5>
                <p><?php echo $obj[0]->sintomas; ?></p>

                <h5>Administracion de Medicamentos:</h5>
                <p><?php echo $obj[0]->medicamentos_admin; ?></p>

                <label>FECHA/HORA CREACINO DE REGISTRO</label><br>
                <input type="text" name="unidad_medida" value="<?php echo $obj[0]->created_at; ?>" disabled><br>
                
                
            </form>

        
            </div>
        </div>
    
    </body>
</html>