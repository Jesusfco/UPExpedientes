<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../php/mostrar.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || RECETAS </title>
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


    $sql = $query = "SELECT * FROM orden";

    if(isset($_POST['search']))
        $sql = $query = "SELECT * FROM orden WHERE user_id LIKE '%" . $_POST['search'] . "%' ";

    else if(isset($_GET['userid']))
        $sql = $query = "SELECT * FROM orden WHERE user_id = " . $_GET['userid'];       
        $res = $conn->query($sql);

        $consult = setUserIdCreatorId($conn->query($sql), $conn);


?>

<div class="contenedorPrincipal">

<<<<<<< HEAD
<?php include "../php/creaciones2.php"; ?>

<h1>ORDEN DE RECETA</h1>
=======
<?php include "../php/creaciones.php"; ?>

<h1>ORDEN </h1>
>>>>>>> 27f3e984252e76b06b8e13fa3ac28af871bab733

        <form method="POST" action="">
            <input type="text" name="search"  placeholder="id usuario">
        </form>

        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>PACIENTE </th>
                <th>CREADOR</th>
                <th>TIPO</th>
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
                    <td>". $obj->creator_id   ."</td>
                    <td>". $obj->tipo   ."</td>
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