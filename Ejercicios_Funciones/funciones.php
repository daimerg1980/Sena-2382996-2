<?php
    function operaciones($n1, $n2, $op){
        eval("\$resultado = $n1 $op $n2;");
        return $resultado;
    }
    echo operaciones(10,20,"+")."<br>";
    echo operaciones(10,20,"-")."<br>";
    echo operaciones(10,20,"*")."<br>";
    echo operaciones(10,20,"/")."<br>";
?>    