<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./tiempo.php" method="post" enctype="multipart/form-data" target="_self">
        <label>Selecciona tu zona horaria:<br></label>
        <select name="zona" id="zona">
           <optgroup label="America">
                <option value="America/New_York">New York</option>
                <option value="America/Mexico_City">Ciudad De Mexico</option>
                <option value="America/Sao_Paulo">Sao Paulo</option>
           </optgroup>
            <optgroup label="Europa">
               <option value="Europe/Dublin">Dublin</option>
                <option value="Europe/Paris">Paris</option>
                <option value="Europe/Amsterdam">Amsterdam</option>
            </optgroup>
            <optgroup label="Asia">
                <option value="Asia/Dubai">Dubai</option>
                <option value="Asia/Bangkok">Bangokok</option>
                <option value="Asia/Tokyo">Tokio</option>
            </optgroup>
        </select>
        <button type="submit" id="boton" href="./tiempo.php">Enviar</button>
    </form>
    
    <br>
    
    <?php
        $lugar = ( isset ($_POST["zona"]) && $_POST["zona"] != "" )? $_POST["zona"] : false;
        date_default_timezone_set($lugar);
        $fecha=date("d-M-Y");
        $hora=date("H:i:s");

        echo "<strong>La fecha de consulta de este libro fue: </strong>".$fecha."<strong> a las </strong>".$hora."<strong> en </strong>".$lugar;

        $dia = rand(01,30);
        $mes = rand(01,12);
        $anio = rand(1000, 2023);

        if($mes==1)
            $mes = "Enero";
        if($mes==2)
            $mes = "Febrero";
        if($mes==3)
            $mes = "Marzo";
        if($mes==4)
            $mes = "Abril";
        if($mes==5)
            $mes = "Mayo";
        if($mes==6)
            $mes = "Junio";
        if($mes==7)
            $mes = "Julio";            
        if($mes==8)
            $mes = "Agosto";
        if($mes==9)
            $mes = "Septiembre";
        if($mes==10)
            $mes = "Octubre";
        if($mes==11)
            $mes = "Noviembre";
        if($mes==12)
            $mes = "Diciembre";

        echo "<br>Fecha de creacion del libro: ".$dia." de ".$mes." de ".$anio;
    ?>
</body>
</html>