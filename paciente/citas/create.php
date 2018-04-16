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
                <a href="index.php">REGRESAR</a><BR>
                <?php include "menu.php" ?>
            </div>

            <?php 
                include "../php/middleware.php";
                include "../php/sql.php";                                                 

                //SI EL FORMULARIO SE ENVIO
                if(isset($_POST['submit'])){                   
                    include 'php/createLogic.php';                    
                }    
                $id = "";
                if(isset($_GET['id']))
                    $id = $_GET['id'];                   
            ?>
            <div class="contenedorPrincipal">

                <h2>Crear Cita</h2>

                <form method="POST" action="">

                

                    
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>" >

                    <label>MEDICO</label><br>
                    <input type="number" name="medico_id"><br>

                    <label>FECHA</label><br>
                    <input type="date" name="fecha"><br>

                    <label>HORA</label><br>
                    <input type="time" name="hora"><br>

                    <label>Sintomas</label><br>
                    <textarea name="sintomas"></textarea><BR>

                    <label>Administracion de Medicamentos</label><br>
                    <textarea name="medicamentos_admin"></textarea>   <br>                
                                                                
                <input type="submit" name="submit" placeholder="CREAR DATOS">

            </form>

        
            </div>
        </div>
    
    </body>
</html>