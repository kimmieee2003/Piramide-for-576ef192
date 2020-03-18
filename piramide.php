<?php
$ster = readline("hoeveen lagen wilt u hebben?");

for($i = 1; $i <= $ster; $i++){
    for($j = $i; $j <= 5; $j++){
        echo " ";
    } 
    for($j = 1; $j <= $i; $j++){
        echo " * ";
    }
    echo "\n";
}
?>