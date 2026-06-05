<?php
if (isset($_POST['ativar'])) {

    for ($i=200; $i>99; $i--) 
    {
        echo "<p>Contagem: $i <p>";
    }
    }
else {
    echo "<h1> Deu ruim... <h1>";
}
?>
