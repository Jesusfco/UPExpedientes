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
        <img src="http://localhost/expediente/images/1ec3ed77-94bc-4b24-b1f9-13da8646b9f5.png">
        
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

        $query = "SELECT * FROM historial_clinico";

        if(isset($_POST['search'])){
            $query = 'SELECT * FROM historial_clinico WHERE user_id LIKE "%' . $_POST['search'] . '%"';
        }

        $conn->query($query);
        
                        
    ?>
    <div class="contenedorPrincipal">

        <h1>Historial</h1>
        <a href="create.php">CREAR HISTORIAL</a>
        <form method="POST" action="">
            <input type="text" name="search" >
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
        
        
        if($res = $conn->query($query))
        while ($obj = $res->fetch_object()) {
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