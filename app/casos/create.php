<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || CASO NOTIFICABLE </title>
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
                <a href="index.php">REGRESAR</a><br>
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

<<<<<<< HEAD
                <h2>Crear Resumen Clínico</h2>
=======
                <h2>Crear Resumen Clinico</h2>
>>>>>>> 27f3e984252e76b06b8e13fa3ac28af871bab733

                <form method="POST" action="">

                <label>ID USUARIO PACIENTE</label><br>
                <input type="number" name="user_id" value="<?php echo $id; ?>" required><br>

                <label>RESUMEN CLINICO</label><br>
                <textarea name="res_clinico"></textarea><BR>

                <label>DESCRIPCION DE ACCIONES</label><br>
                <textarea name="desc_acciones"></textarea><BR>

                <label>RIESGOS</label><br>
                <textarea name="riesgos"></textarea><BR>                

                <input type="submit" name="submit" placeholder="CREAR datos">
            </form>

        
            </div>
        </div>
    
    </body>
</html>