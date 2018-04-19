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
    <title>PANEL ADMINISTRACION || CASOS NOTIFICABLES </title>
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

    $sql = $query = "SELECT * FROM casos_notificables";

    if(isset($_POST['search']))
        $sql = $query = "SELECT * FROM casos_notificables WHERE user_id = " . $_POST['search'];

    else if(isset($_GET['userid']))
        $sql = $query = "SELECT * FROM casos_notificables WHERE user_id = " . $_GET['userid'];
       
        $consult = setUserIdCreatorId($conn->query($sql), $conn);
    

?>

<div class="contenedorPrincipal">


<!-- <?php include "../php/creaciones2.php"; ?> -->



<!-- <h1>RESUMEN CLÍNICO</h1> -->




<h1>CASOS NOTIFICABLES</h1>

<a href="create.php">Crear Caso Notificable </a>

        <form method="POST" action="">
            <input type="text" name="search"  placeholder="id usuario">
        </form>

        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>PACIENTE </th>                
                <th>CREADOR</th>
                <th>RESUMEN CLINICO</th>                
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
                <td>". substr($obj->res_clinico,0, 100)   ."</td>                
                <td>
                    <a href='php/pdf.php?id=". $obj->id ."'>PDF</a><br>
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