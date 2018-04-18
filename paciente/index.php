<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANEL ADMINISTRACION || USUARIOS </title>
    <link rel="stylesheet" href="css/styles.css
    ">
</head>
<body>

<div class="header">
    <div class="centrar">
        <img src="../images/logo2.png">
        
        <h1>Registros Clínica David</h1>
    </div>
</div>


<div class="containerP">
    <div class="menu">
        <?php include "menu.php" ?>

    </div>

    <?php 
        include "php/middleware.php";
        include "php/sql.php";

        $query1 = "SELECT * FROM usuario WHERE id = '" . $_SESSION['id'] . "' ";
        $query2 = "SELECT * FROM domicilo WHERE user_id = " . $_SESSION['id'] ;
        $query3 = "SELECT * FROM paciente WHERE user_id = " . $_SESSION['id'] ;
        
        //consultamos
        $res1 = $conn->query($query1);
        $obj1 = $res1->fetch_object();                 

        $res2 = $conn->query($query2);
        $obj2 = $res2->fetch_object();  

        $res3 = $conn->query($query3);
        $obj3 = $res3->fetch_object();  
    ?>
    <div class="contenedorPrincipal">

        <h1>BIENVENIDO <?php echo $_SESSION['user']; ?></h1>
        <h2>Tabla Usuario</h2>


                <label>NOMBRE COMPLETO</label><br>
                <p> <?php echo $obj1->name; ?></p>

                <label>CURP</label><br>
                <p> <?php echo $obj1->curp; ?></p>

                <label>CARGO: <?php echo $obj1->cargo; ?></label><br>
                
                
                
                <label>CORREO</label><br>
                <p> <?php echo $obj1->correo; ?></p>

                <label>STATUS</label><br>
                <select name="status" disabled>
                    <option value="<?php echo $obj1->status; ?>"><?php echo $obj1->status; ?></option>
                    <option value="activo">activo</option> 
                    <option value="inactivo">inactivo</option>                        
                </select>
                
                <h2>Tabla Domicilio</h2>

                <label>CALLE</label><br>
                <p> <?php echo $obj2->calle; ?></p>

                <label>Numero externo</label><br>
                <p> <?php echo $obj2->num_ext; ?></p>

                <label>Numero interno</label><br>
                <p> <?php echo $obj2->num_int; ?></p>

                <label>MUNICIPIO</label><br>
                <p> <?php echo $obj2->municipio; ?></p>

                <label>LOCALIDAD</label><br>
                <p><?php echo $obj2->localidad; ?></p>

                <label>COLONIA</label><br>
                <p><?php echo $obj2->colonia; ?></p>

                <label>CODIGO POSTAL</label><br>
                <p><?php echo $obj2->cod_postal; ?></p>

                <label>CELULAR 1</label><br>
                <p><?php echo $obj2->cel_uno; ?></p>

                <label>CELULAR 2</label><br>
                <p><?php echo $obj2->cel_dos; ?></p>
                
                <h2>Tabla PACIENTE</h2>

                    <label>NOMBRE:</label><br>
                    <p><?php echo $obj3->nombre; ?></p>

                    <label>Apellido Paterno</label><br>
                    <p><?php echo $obj3->ape_pat; ?></p>

                    <label>Apellido Materno</label><br>
                    <p><?php echo $obj3->ape_mat; ?></p>

                    <label>Fecha de Nacimiento:</label><br>
                    <p><?php echo $obj3->fecnac; ?></p>

                    <label>SEXO:</label><br>
                    <select name="sexo"  disabled>
                        <option value="<?php echo $obj3->sexo; ?>"> <?php echo $obj3->sexo; ?></option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select><br>

                    <label>DIRECCION </label><br>
                    <p><?php echo $obj3->direccion; ?></p>

                    <label>TELEFONO </label><br>
                    <p><?php echo $obj3->telefono; ?></p>

                    <label>NIVEL ECONOMICO </label><br>
                    <select name="nivel_eco"  disabled>
                        <option value="<?php echo $obj3->nivel_eco; ?>"> <?php echo $obj3->nivel_eco; ?></option>
                        <option value="alto">alto</option>
                        <option value="medio">medio</option>
                        <option value="bajo">bajo</option>
                    </select><br>

                    <label>VIVIENDA </label><br>
                    <p><?php echo $obj3->vivienda; ?></p>

                    <label>TIPO SANGUINEO </label><br>
                    <p><?php echo $obj3->tipo_sang; ?></p>

                    <label>DISCAPACIDAD </label><br>
                    <p><?php echo $obj3->discapacidad; ?></p>

                    <label>ETNIA </label><br>
                    <p><?php echo $obj3->etnia; ?></p>

                    <label>RELIGION </label><br>
                    <p><?php echo $obj3->religion; ?></p>
    </div>
</div>
    
</body>
</html>