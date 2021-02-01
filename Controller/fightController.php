<?php
require "../Models/Character.php";
session_start();



// $name, $minHealth, $maxHealth, $rage, $rageStat, $weapon, $minDamage, $maxDamage, $shield, $minShield, $maxShield  
if (isset($_GET["character"])) {

    if ($_GET["character"] == "paladin") {
        if (!isset($paladin)) {
            $paladin = new Character("Paladin", 2000, 3000, 0, 30, "espadon", 800, 1500, "armure de plaques", 400,  600);
            $_SESSION["character"] = $paladin;
        }
    }
    if ($_GET["character"] == "mage") {
        if (!isset($mage)) {
            $mage = new Character("Mage", 1000, 1500, 0, 20, "bâton des flammes froides", 600, 800, "robe noire", 500, 700);
            $_SESSION["character"] = $mage;
        }
    }
    if ($_GET["character"] == "assassin") {
        if (!isset($assassin)) {
            $assassin = new Character("Assassin", 800, 1300, 0, 20, "dagues empoisonnées", 600, 800, "cape de voleur", 300, 400);
            $_SESSION["character"] = $assassin;
        }
    }
    if ($_GET["character"] == "developpeur") {
        if (!isset($developpeur)) {
            $dev = new Character("Développeur Web", 1500, 1800, 0, 40, "ordinateur vieillissant", 400, 700, "cables RJ-45", 300, 500);
            $_SESSION["character"] = $dev;
        }
    }
}


// monstre aléatoire
if (!isset($_GET["monster"])){
$nomimages[1] = "revenant";
$nomimages[2] = "huru";
$nomimages[3] = "virus";
$nomimages[4] = "bug";


$affimage = rand(1, 4);

$_GET["monster"] = $nomimages[$affimage];
var_dump($_GET["monster"]);
}

if (isset($_GET["monster"])) {


    
    if ($_GET["monster"] == "revenant") {
        if (!isset($revenant)) {
            $revenant = new Character("Revenant", 1000, 1300, 0, 20, "ongles", 200, 400, "absence d'armure", 0, 0);
            $_SESSION["monster"] = $revenant;
        }
    }
    if ($_GET["monster"] == "huru") {
        if (!isset($urukHai)) {
            $urukHai = new Character("huru", 1500, 2000, 0, 20, "fléau", 500, 800, "armure de piques", 700, 1000);
            $_SESSION["monster"] = $urukHai;
        }
    }
    if ($_GET["monster"] == "virus") {
        if (!isset($coronuviras)) {
            $coronuviras = new Character("virus", 2000, 3000, 0, 20, "masse", 700, 1000, "armure en peau de chauve-souris", 500, 700);
            $_SESSION["monster"] = $coronuviras;
        }
    }
    if ($_GET["monster"] == "bug") {
        if (!isset($bug)) {
            $bug = new Character("Bug", 1, 9999, 0, 5, "AiremeTiréAireÉfÉToile", 500, 800, "erreur système", 10, 600);
            $_SESSION["monster"] = $bug;
        }
    }
}






    if($_SESSION["character"]->getHealth() > 0 && $_SESSION["monster"]->getHealth() > 0) {

        if ($_SESSION["character"]->getHealth() > 0 && $_SESSION["monster"]->getHealth() > 0) {
// cas où personne n a de rage
            if ($_SESSION["character"]->getRage() < 100 && $_SESSION["monster"]->getRage() < 100) {

            $_SESSION["character"]->setHealth($_SESSION["character"]->getHealth() - ($_SESSION["monster"]->getWeaponDamage() - $_SESSION["character"]->getShieldValue()));
            $_SESSION["character"]->setRage($_SESSION["character"]->getRage() + $_SESSION["character"]->getRageStat());

            $_SESSION["monster"]->setHealth($_SESSION["monster"]->getHealth() - ($_SESSION["character"]->getWeaponDamage() - $_SESSION["monster"]->getShieldValue()));
            $_SESSION["monster"]->setRage($_SESSION["monster"]->getRage() + $_SESSION["monster"]->getRageStat());
            
            
}




if ($_SESSION["character"]->getRage() >= 100) {
                $_SESSION["monster"]->setHealth($_SESSION["monster"]->getHealth() - $_SESSION["character"]->getWeaponDamage());
                $_SESSION["character"]->setRage($_SESSION["character"]->getRage() - $_SESSION["character"]->getRage());
                echo "Le héro entre en rage et inflige " . $_SESSION["character"]->getWeaponDamage() . " dégats !!! <br><br>";
            };
        }
        if ($_SESSION["monster"]->getHealth() <= 0) {
            echo "Le monstre est vaincu !!! Plus loin, le coup classique, la princesse Mariah Carrey, ils se marièrent, il tua sa femme et hérita de tout le royaume <br> Vous pensiez vraiement qu'il faisait ça pour la gloire ?";
        }
    }
