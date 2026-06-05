<?php
$med = ($_POST["n1"]+$_POST["n2"]+$_POST["n3"])/3;
if ($med >=7){
    echo "APROVADO";
}
else{
    echo "REPROVADO";
}