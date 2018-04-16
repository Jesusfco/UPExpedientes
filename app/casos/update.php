<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || CASO NOTIFICABLE ACTUALIZAR </title>
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
                // $sql = "SELECT * FROM alergias WHERE id = '" . $id . "' ";
                if(isset($_POST['submit'])){                    
                    include 'php/updateLogic.php';                    
                } 

                $sql = "SELECT * FROM casos_notificables WHERE id = '" . $id . "' ";
                $res = $conn->query($sql);
                $obj = $res->fetch_object();
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>ACTUALIZAR CASO NOTIFICABLE</h2>

                <form method="POST" action="">

                <label>ID USUARIO PACIENTE</label><br>
                <input type="number" name="user_id" value="<?php echo $obj->user_id; ?>" disabled><br>

                <label>RESUMEN CLINICO</label><br>
                <textarea name="res_clinico"><?php echo $obj->res_clinico; ?></textarea><BR>

                <label>DESCRIPCION DE ACCIONES</label><br>
                <textarea name="desc_acciones"><?php echo $obj->desc_acciones; ?></textarea><BR>

                <label>RIESGOS</label><br>
                <textarea name="riesgos"><?php echo $obj->riesgos; ?></textarea><BR>   
                
                <input type="submit" name="submit">
                    
                </form>
            </div>
        </div>
    
    </body>
</html>