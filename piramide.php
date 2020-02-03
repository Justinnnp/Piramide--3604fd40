<?php
    $vraag = readLine("Hoeveel stapels wil je hebben ? ");
    $letter = "";
    for($i = 1; $i <= $vraag; $i ++) {
        $letter .= "*";
        echo ($letter .PHP_EOL);
    }
?>

