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
            ?>
            <div class="contenedorPrincipal">

                <h2>Crear receta</h2>

                <form method="POST" action="">

                

                <label>ID USUARIO</label><br>
                <input type="number" name="user_id" required><br>

                <label>MEDICAMENTO</label><br>
                <input type="text" name="medicamento"><br>

                <label>Unidad de Medida</label><br>
                <input type="text" name="unidad_medida"><br>

                <label>Dosis</label><br>
                <input type="text" name="dosis"><br>

                <label>Frecuencia</label><br>
                <input type="text" name="frecuencia"><br>

                <label>Via de administracion</label><br>
                <input type="text" name="via_administracion"><br>

                <label>Fecha de Inicio</label><br>
                <input type="date" name="fec_inicio"><br>

                <label>Fecha de Fin</label><br>
                <input type="date" name="fec_fin"><br>

                <label>Indicaciones</label><br>
                <input type="text" name="indicaciones_ad"><br>

                

                

                

                <input type="submit" name="submit" placeholder="CREAR datos">
            </form>

        
            </div>
        </div>
    
    </body>
</html>