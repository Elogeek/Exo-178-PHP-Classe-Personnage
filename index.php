<?php

include "classes/Personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();

echo $perso->getNom();

echo"<br><br>";



$perso2 = new personnage();
$perso2->nom = "Robert";
echo $perso2->getNom();



$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
