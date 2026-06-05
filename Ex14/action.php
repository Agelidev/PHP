<?php
$list = [$_POST["n1"], $_POST["n2"], $_POST["n3"], $_POST["n4"]];
sort($list);
echo "menor valor: ".$list[0]." maior valor: ".$list[3];