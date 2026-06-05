<?php
if (isset($_POST['btmultiplicar'])&& $_POST['num'] > 0 && $_POST['num'] < 11){
    for ($i=1; $i<11; $i++) 
    {   
        $numero = $_POST['num'];
        $resultado = $numero * $i;
        echo "<p> $numero x $i = $resultado <p>";
    }}
else {
    echo "<h1> Coloque um número de 1 a 10 <h1>";
}
?>