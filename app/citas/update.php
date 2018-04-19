<?php 
    
    include '../../php/url.php';
    include "../../php/sql.php";   
    include "../php/middleware.php";

?>

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
                <?php include "../menu.php" ?>
            </div>

            <?php 

                $id = $_GET['id'];
                
                if(isset($_POST['submit'])){
                    
                    include 'php/updateLogic.php';                    
                } 

                $sql = "SELECT * FROM citas WHERE id = '" . $id . "' ";
                $res = $conn->query($sql);
                $obj = $res->fetch_object();
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>ACTUALIZAR ORDEN</h2>

                <form method="POST" action="">                

                    <label>ID USUARIO PACIENTE</label><br>
                    <input type="number" name="user_id" value="<?php echo $obj->user_id; ?>" disabled><br>

                    <label>FECHA</label><br>
                    <input type="date" name="fecha" value="<?php echo $obj->fecha; ?>"><br>

                    <label>HORA</label><br>
                    <input type="time" name="hora" value="<?php echo $obj->hora; ?>"><br>

                    <label>Sintomas</label><br>
                    <textarea name="sintomas" ><?php echo $obj->sintomas; ?></textarea><BR>

                    <label>Administracion de Medicamentos</label><br>
                    <textarea name="medicamentos_admin"><?php echo $obj->medicamentos_admin; ?></textarea>   <br>   
                                                                
                    <input type="submit" name="submit" placeholder="CREAR DATOS">

                    </form>

        
            </div>
        </div>
    
    </body>
</html>