<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || USUARIOS </title>
    <link rel="stylesheet" href="../css/styles.css
    ">
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
        <?php include "menu.php" ?>

    </div>

    <?php 
        include "../php/middleware.php";
        include "../php/sql.php";

        $sql = $query = "SELECT * FROM historial_clinico WHERE user_id = " . $_SESSION['id'];        

        $consult = setUserId($conn->query($sql), $conn);
        
                        
    ?>
    <div class="contenedorPrincipal">

        <h1>Historial</h1>

        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Ocupación</th>
                <th>Heredo Familiares</th>
            <!-- // No patologicos -->
                <th>Vivienda</th>
                <!-- <th></th> -->
                <th>Fecha de creación</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php  
        
        
       foreach($consult as $obj){
       
            echo "
            <tr>
                <td>". $obj->id   ."</td>
                <td>". $obj->user_id   ."</td>
                <td>". $obj->ocupacion   ."</td>
                <td>". $obj->heredo_familiares   ."</td>
                <td>". $obj->vivienda   ."</td>
                <td>". $obj->created_at   ."</td>
                <td>
                    <a href='show.php?id=". $obj->id ."'>VER</a><br>                    
                    
                </td>
            </tr>
            
            ";
        } 
        ?>
            


        </tbody>
    </table>
    </div>
</div>
    
</body>
</html>