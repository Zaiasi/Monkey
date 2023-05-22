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
    $frase=(isset($_POST["frase"])&&$_POST["frase"]!="")? $_POST["frase"]: "No hay frase a buscar";
    $modo=(isset($_POST["modo"])&&$_POST["modo"]!="")? $_POST["modo"]: "No seleccionó modo";
    $azar_letras=1;
    $azar_prt1=rand(500,700);
    $azar_prt2=rand(200,700);
    $azar_palabra;
    $azar_caracter="c";
    $x;
    $celdas=0;
    $palabras=explode(" ",$frase);
    shuffle($palabras);
    $frase_desorden=implode(" ",$palabras);
    if($modo=="normal")
    {
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
        for($c=0;$c<$celdas;$c++)
        {
            azar_prt1($azar_prt2,$azar_letras,$azar_caracter);
            echo "<strong>".$palabras[$c]."</strong>";
            azar_prt2($azar_prt2,$azar_letras,$azar_caracter);
        }
    }
    if($modo=="orden")
    {
        azar_prt1($azar_prt1,$azar_letras,$azar_caracter);
        echo "<strong>".$frase_desorden."</strong>";
        azar_prt2($azar_prt2,$azar_letras,$azar_caracter);
    }
    /*$palabras=explode(" ",$frase);
    echo "<br><br>";
    echo var_dump($palabras);
    echo "<br><br>";
    echo "<br><br>";
    echo $modo;*/
    
?>