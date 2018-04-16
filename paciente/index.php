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
        <img src="../../images/logo2.png">
        
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
                <input type="text" name="localidad" value="<?php echo $obj2->localidad; ?>" disabled><br>

                <label>COLONIA</label><br>
                <input type="text" name="colonia" value="<?php echo $obj2->colonia; ?>" disabled><br>

                <label>CODIGO POSTAL</label><br>
                <input type="number" name="cod_postal" value="<?php echo $obj2->cod_postal; ?>" disabled><br>

                <label>CELULAR 1</label><br>
                <input type="number" name="cel_uno" value="<?php echo $obj2->cel_uno; ?>" disabled><br>

                <label>CELULAR 2</label><br>
                <input type="number" name="cel_dos" value="<?php echo $obj2->cel_dos; ?>" disabled><br>
                
                <h2>Tabla PACIENTE</h2>

                    <label>NOMBRE:</label><br>
                    <input type="text" name="nombre" value="<?php echo $obj3->nombre; ?>"  disabled><br>

                    <label>Apellido Paterno</label><br>
                    <input type="text" name="ape_pat" value="<?php echo $obj3->ape_pat; ?>"  disabled><br>

                    <label>Apellido Materno</label><br>
                    <input type="text" name="ape_mat" value="<?php echo $obj3->ape_mat; ?>"  disabled><br>

                    <label>Fecha de Nacimiento:</label><br>
                    <input type="date" name="fecnac" value="<?php echo $obj3->fecnac; ?>"  disabled><br>

                    <label>SEXO:</label><br>
                    <select name="sexo"  disabled>
                        <option value="<?php echo $obj3->sexo; ?>"> <?php echo $obj3->sexo; ?></option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select><br>

                    <label>DIRECCION </label><br>
                    <input type="text" name="direccion" value="<?php echo $obj3->direccion; ?>" disabled><br>

                    <label>TELEFONO </label><br>
                    <input type="phone" name="telefono" value="<?php echo $obj3->telefono; ?>" disabled><br>

                    <label>NIVEL ECONOMICO </label><br>
                    <select name="nivel_eco"  disabled>
                        <option value="<?php echo $obj3->nivel_eco; ?>"> <?php echo $obj3->nivel_eco; ?></option>
                        <option value="pobre">pobre</option>
                        <option value="rico">rico</option>
                    </select><br>

                    <label>VIVIENDA </label><br>
                    <input type="text" name="vivienda" value="<?php echo $obj3->vivienda; ?>" disabled><br>

                    <label>TIPO SANGUINEO </label><br>
                    <input type="text" name="tipo_sang" value="<?php echo $obj3->tipo_sang; ?>" disabled><br>

                    <label>DISCAPACIDAD </label><br>
                    <input type="text" name="discapacidad" value="<?php echo $obj3->discapacidad; ?>" disabled><br>

                    <label>ETNIA </label><br>
                    <input type="text" name="etnia" value="<?php echo $obj3->etnia; ?>" disabled><br>

                    <label>RELIGION </label><br>
                    <input type="text" name="religion" value="<?php echo $obj3->religion; ?>" disabled><br>
    </div>
</div>
    
</body>
</html>