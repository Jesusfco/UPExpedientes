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
                // $sql = "SELECT * FROM alergias WHERE id = '" . $id . "' ";
                if(isset($_POST['submit'])){                    
                    include 'php/updateLogic.php';                    
                } 

                $sql = "SELECT * FROM auxiliar_diagnostico WHERE id = '" . $id . "' ";
                $res = $conn->query($sql);
                $obj = $res->fetch_object();
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>ACTUALIZAR AUXILIAR DIAGNÓSTICO</h2>

                <form method="POST" action="">

                    <label>ID USUARIO PACIENTE</label><br>
                    <input type="number" name="user_id" value="<?php echo $obj->user_id; ?>" disabled><br>

                    <label>TIPO DE ESTUDIO</label><br>
                    <input type="text" name="tipo_estudio" value="<?php echo $obj->tipo_estudio; ?>"><br>

                    <label>DIAGNÓSTICO RELACIÓN</label><br>
                    <textarea name="diagno_relacion"><?php echo $obj->diagno_relacion; ?></textarea><BR>

                    <label>URGENCIA</label><br>
                    <input type="text" name="urgencia" value="<?php echo $obj->urgencia; ?>"><br>

                    <label>INDICACIONES</label><br>
                    <textarea name="indicaciones"><?php echo $obj->indicaciones; ?></textarea><BR>                                

                    <input type="submit" name="submit" placeholder="CREAR datos">
                    
                </form>
            </div>
        </div>
    
    </body>
</html>