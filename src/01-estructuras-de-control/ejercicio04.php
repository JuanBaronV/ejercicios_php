<?php

$dado = rand(1, 6);

if ($dado == 1) {
    print("<img src ='img/dado/Dice-1-b.svg'>");
}elseif ($dado == 2) {
    print("<img src ='img/dado/Dice-2-b.svg'>");
}elseif ($dado == 3) {
    print("<img src ='img/dado/Dice-3-b.svg'>");
}elseif ($dado == 4) {
    print("<img src ='img/dado/Dice-4-b.svg'>");
}elseif ($dado == 5) {
    print("<img src ='img/dado/Dice-5-b.svg'>");
}else print("<img src ='img/dado/Dice-6-b.svg'>");

?>