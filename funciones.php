
<?php
    function azar_prt1 ($azar_prt1,$azar_letras,$azar_caracter)
    {
        for($l=0;$l<=$azar_prt1;$l++)
        {
            $azar_letras=rand(32,126);
            $azar_caracter=chr($azar_letras);
            echo $azar_caracter;
        }
    }
    function azar_prt2 ($azar_prt2,$azar_letras,$azar_caracter)
    {
        for($l=0;$l<=$azar_prt2;$l++)
        {
            $azar_letras=rand(32,126);
            $azar_caracter=chr($azar_letras);
            echo $azar_caracter;
        }
            
    }
    function titulo ($azar_titulo,$azar_letras,$azar_caracter)
    {
        for($l=0;$l<=$azar_titulo;$l++)
        {
            $azar_letras=rand(32,126);
            $azar_caracter=chr($azar_letras);
            echo $azar_caracter;
        }
            
    }
    $frase=(isset($_POST["frase"])&&$_POST["frase"]!="")? $_POST["frase"]: "No hay frase a buscar";
    $modo=(isset($_POST["modo"])&&$_POST["modo"]!="")? $_POST["modo"]: "No seleccionó modo";
    $azar_letras=1;
    $azar_prt1=rand(500,700);
    $azar_prt2=rand(200,700);
    $azar_titulo=rand(5,25);
    $azar_palabra;
    $azar_caracter="c";
    $x;
    $celdas=0;
    $palabras=explode(" ",$frase);
    shuffle($palabras);
    $frase_desorden=implode(" ",$palabras);
    if($modo=="normal")
    {
        echo "Titulo:";
        titulo ($azar_titulo,$azar_letras,$azar_caracter);
        echo "<br><br>";
        azar_prt1($azar_prt1,$azar_letras,$azar_caracter);
        echo "<strong>".$frase."</strong>";
        azar_prt2($azar_prt2,$azar_letras,$azar_caracter);
    }
    if($modo=="palabras")
    {
        $azar_prt1=rand(100,300);
        $azar_prt2=rand(0,200);
        foreach($palabras as $x)
        {
            $celdas++;
        }
        echo "Titulo:";
        titulo ($azar_titulo,$azar_letras,$azar_caracter);
        echo "<br><br>";
        for($c=0;$c<$celdas;$c++)
        {
            azar_prt1($azar_prt2,$azar_letras,$azar_caracter);
            echo "<strong>".$palabras[$c]."</strong>";
            azar_prt2($azar_prt2,$azar_letras,$azar_caracter);
        }
    }
    if($modo=="orden")
    {
        echo "Titulo:";
        titulo ($azar_titulo,$azar_letras,$azar_caracter);
        echo "<br><br>";
        azar_prt1($azar_prt1,$azar_letras,$azar_caracter);
        echo "<strong>".$frase_desorden."</strong>";
        azar_prt2($azar_prt2,$azar_letras,$azar_caracter);
    }
    if ($modo=="invertido")
    {
        echo "Titulo:";
        titulo ($azar_titulo,$azar_letras,$azar_caracter);
        echo "<br><br>";
        $frase_ivertida=strrev($frase);
        azar_prt1($azar_prt2,$azar_letras,$azar_caracter);
        echo "<strong>".$frase_ivertida."</strong>";
        azar_prt2($azar_prt2,$azar_letras,$azar_caracter);
    }
    echo '<br><br>';
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