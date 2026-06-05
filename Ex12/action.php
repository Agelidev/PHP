<?php
    if ($_POST['genero'] == "M"){
        $p = (72.7* $_POST["altura"])-58;
        echo "".$p."";
    }
    else{
        $p = (62.1* $_POST["altura"])-44.7;
        echo "".$p."";
    }