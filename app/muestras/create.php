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
            <img src="http://localhost/expediente/images/1ec3ed77-94bc-4b24-b1f9-13da8646b9f5.png">
            
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

                //SI EL FORMULARIO SE ENVIO
                if(isset($_POST['submit'])){                   
                    include 'php/createLogic.php';                    
                }                       
                $id = "";
                if(isset($_GET['id']))
                    $id = $_GET['id'];
            
            ?>
            <div class="contenedorPrincipal">

                <h2>Crear Muestra</h2>

                <form method="POST" action="">

                

                <label>ID USUARIO PACIENTE</label><br>
                <input type="number" name="user_id" value="<?php echo $id; ?>" required><br>

                <label>TIPO DE MUESTRA</label><br>
                <input type="text" name="tipo_muestra"><br>

                <label>NUMERO DE MUESTRAS</label><br>
                <input type="number" name="numero_muestras" min="1"><br>

                <label>FECHA DE RECOLECCION</label><br>
                <input type="date" name="fec_recoleccion"><br>

                <label>FECHA DE ENTREGA</label><br>
                <input type="date" name="fec_entrega"><br>                                

                <input type="submit" name="submit" placeholder="CREAR datos">
            </form>

        
            </div>
        </div>
    
    </body>
</html>