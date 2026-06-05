<?php
if (isset($_POST['btmultiplicar'])){
    for ($i=1; $i<11; $i++) 
    {
        $resultado = 7 * $i;
        echo "<p> 7 x $i = $resultado <p>";
    }}
else {
    echo "<h1> Deu ruim... <h1>";
}
?>