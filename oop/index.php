<?php
require_once('animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("shaun");
echo "name:"; echo $sheep->name . "<br>"; // "shaun"
echo "legs:"; echo $sheep->legs . "<br>"; // 4
echo "cold_blooded:";echo  $sheep->cold_blooded . "<br>"; // "no"

$kodok = new Frog("buduk");
echo "<br>name:";echo  $kodok->name . "<br>";
echo "legs:"; echo $kodok->legs . "<br>"; // 4
echo "cold_blooded:"; echo $kodok->cold_blooded . "<br>"; // "no"
echo "jump:"; echo $kodok->jump(). "<br>"; // "hop hop"

$sungokong = new Ape("kera sakti");
echo "<br>name:";echo  $sungokong->name . "<br>";
echo "legs:"; echo $sungokong->legs . "<br>"; // 2
echo "cold_blooded:";echo  $sungokong->cold_blooded . "<br>"; // "no"
echo "yell:";echo $sungokong->yell(); // "Auooo"
?>
