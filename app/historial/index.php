<?php 
    
    include '../../php/url.php';
    include "../../php/sql.php";   
    include "../php/middleware.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../php/mostrar.php"; ?>
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
        <?php include "../menu.php" ?>

    </div>

    <?php 

        $sql = "SELECT * FROM historial_clinico";

        if(isset($_POST['search'])){
            $sql = 'SELECT * FROM historial_clinico WHERE user_id LIKE "%' . $_POST['search'] . '%"';
        }

        $consult = setUserId($conn->query($sql), $conn);
        
                        
    ?>
    <div class="contenedorPrincipal">

<<<<<<< HEAD
    <?php include "../php/creaciones2.php"; ?>
=======
    <?php include "../php/creaciones.php"; ?>
>>>>>>> 27f3e984252e76b06b8e13fa3ac28af871bab733

        <h1>Historial</h1>
    
        <form method="POST" action="">
            <input type="search" name="search" placeholder="ID USUARIO">
        </form>

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
                    <a href='update.php?id=". $obj->id ."'>Modificar</a><br>
                    <a href='show.php?id=". $obj->id ."'>VER</a><br>                    
                    <a href='delete.php?id=". $obj->id ."'>Eliminar</a><br>
                    
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