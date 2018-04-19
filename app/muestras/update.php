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
                $sql = "SELECT * FROM muestra WHERE id = '" . $id . "' ";
                if(isset($_POST['submit'])){
                    $res = $conn->query($sql);
                    $obj = $res->fetch_object();
                    include 'php/updateLogic.php';                    
                } 

                $sql = "SELECT * FROM muestra WHERE id = '" . $id . "' ";
                $res = $conn->query($sql);
                $obj = $res->fetch_object();
                
                
            ?>
            <div class="contenedorPrincipal">

                <h2>Crear Muestra</h2>

                <form method="POST" action="">

                    <label>ID USUARIO PACIENTE</label><br>
                    <input type="number" name="user_id" value="<?php echo $obj->user_id; ?>" disabled><br>

                    <label>TIPO DE MUESTRA</label><br>
                    <input type="text" name="tipo_muestra" value="<?php echo $obj->tipo_muestra; ?>"><br>

                    <label>NUMERO DE MUESTRAS</label><br>
                    <input type="number" name="numero_muestras" min="1" value="<?php echo $obj->numero_muestras; ?>"><br>

                    <label>FECHA DE RECOLECCION</label><br>
                    <input type="date" name="fec_recoleccion" value="<?php echo $obj->fec_recoleccion; ?>"><br>

                    <label>FECHA DE ENTREGA</label><br>
                    <input type="date" name="fec_entrega" value="<?php echo $obj->fec_entrega; ?>"><br>                                

                    <input type="submit" name="submit" placeholder="CREAR datos">

                </form>
                            
            </div>
        </div>
    
    </body>
</html>