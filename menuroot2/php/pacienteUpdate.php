<?php $res3 = $conn->query($query3);   $obj3 = $res3->fetch_object()?>

<h2>Tabla PACIENTE</h2>

    <label>NOMBRE:</label>
    <input type="text" name="nombre" value="<?php echo $obj3->nombre; ?>"><br>

    <label>Apellido Paterno</label>
    <input type="text" name="ape_pat" value="<?php echo $obj3->ape_pat; ?>"><br>

    <label>Apellido Materno</label>
    <input type="text" name="ape_mat" value="<?php echo $obj3->ape_mat; ?>"><br>

    <label>Fecha de Nacimiento:</label>
    <input type="date" name="fecnac" value="<?php echo $obj3->fecnac; ?>"><br>

    <label>SEXO:</label>
    <select name="sexo">
        <option value="<?php echo $obj3->sexo; ?>"> <?php echo $obj3->sexo; ?></option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select><br>

    <label>DIRECCION </label>
    <input type="text" name="direccion" value="<?php echo $obj3->direccion; ?>"><br>

    <label>TELEFONO </label>
    <input type="phone" name="telefono" value="<?php echo $obj3->telefono; ?>"><br>

    <label>NIVEL ECONOMICO </label>
    <select name="nivel_eco">
        <option value="<?php echo $obj3->nivel_eco; ?>"> <?php echo $obj3->nivel_eco; ?></option>
        <option value="pobre">pobre</option>
        <option value="rico">rico</option>
    </select><br>

    <label>VIVIENDA </label>
    <input type="text" name="vivienda" value="<?php echo $obj3->vivienda; ?>"><br>

    <label>TIPO SANGUINEO </label>
    <input type="text" name="tipo_sang" value="<?php echo $obj3->tipo_sang; ?>"><br>

    <label>DISCAPACIDAD </label>
    <input type="text" name="discapacidad" value="<?php echo $obj3->discapacidad; ?>"><br>

    <label>ETNIA </label>
    <input type="text" name="etnia" value="<?php echo $obj3->etnia; ?>"><br>

    <label>RELIGION </label>
    <input type="text" name="religion" value="<?php echo $obj3->religion; ?>"><br>