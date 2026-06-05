<?php
if (isset($_POST['ativar'])) {

    for ($i=100; $i<201; $i++) 
    {
        echo "<p>Contagem: $i <p>";
    }
    }
else {
    echo "<h1> Deu ruim... <h1>";
}
?>
