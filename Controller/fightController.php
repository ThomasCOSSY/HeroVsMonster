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
        $mage = new Character("Mage", 1000, 1500, 0, 20, "bâton des flammes froides", 600, 800, "robe noire", 500, 700);
        $_SESSION["character"] = $mage;
    }
    if ($_GET["character"] == "assassin") {
        $assassin = new Character("Assassin", 800, 1300, 0, 20, "dagues empoisonnées", 600, 800, "cape de voleur", 300, 400);
        $_SESSION["character"] = $assassin;
    }
    if ($_GET["character"] == "developpeur") {
        $dev = new Character("Développeur Web", 1500, 1800, 0, 40, "ordinateur vieillissant", 400, 700, "cables RJ-45", 300, 500);
        $_SESSION["character"] = $dev;
    }
}


// monstre aléatoire

$nomimages[1] = "revenant";
$nomimages[2] = "huru";
$nomimages[3] = "virus";
$nomimages[4] = "bug";


$affimage = rand(1, 4);

$_GET["monster"] = $nomimages[$affimage];
var_dump($_GET["monster"]);

if (isset($_GET["monster"])) {
    if ($_GET["monster"] == "revenant") {
        $revenant = new Character("Revenant", 1000, 1300, 0, 20, "ongles", 200, 400, "absence d'armure", 0, 0);
        $_SESSION["monster"] = $revenant;
    }
    if ($_GET["monster"] == "huru") {
        $urukHai = new Character("Uruk Haï", 1500, 2000, 0, 20, "fléau", 500, 800, "armure de piques", 700, 1000);
        $_SESSION["monster"] = $urukHai;
    }
    if ($_GET["monster"] == "virus") {
        $coronuviras = new Character("Coronuviras", 2000, 3000, 0, 20, "masse", 700, 1000, "armure en peau de chauve-souris", 500, 700);
        $_SESSION["monster"] = $coronuviras;
    }
    if ($_GET["monster"] == "bug") {
        $bug = new Character("Bug", 1, 9999, 0, 5, "AiremeTiréAireÉfÉToile", 500, 800, "erreur système", 10, 600);
        $_SESSION["monster"] = $bug;
    }
}


function attacked()
{
}


    // while ($hero->getHealth() > 0 && $orc->getHealth() > 0) {

    //     if ($hero->getHealth() > 0 && $orc->getHealth() > 0) {
    //         $hero->attacked($orc->attack());

    //         echo "Le monstre inflige " . $orc->attack() . " dégats ! mais " . $hero->getShield() . " bloque " . $hero->getShieldValue() . " dégats, il subit donc " . ($orc->getDamage() - $hero->getShieldValue()) . " point de dégats, il lui reste " . $hero->getHealth() . " point de vie !!! <br>";
    //         if ($hero->getRage() >= 100) {
    //             $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage());
    //             $hero->setRage($hero->getRage() - $hero->getRage());
    //             echo "Le héro entre en rage et inflige " . $hero->getWeaponDamage() . " dégats !!! <br><br>";
    //         };
    //     }
    //     if ($orc->getHealth() <= 0) {
    //         echo "Le monstre est vaincu !!! Plus loin, le coup classique, la princesse Mariah Carrey, ils se marièrent, il tua sa femme et hérita de tout le royaume <br> Vous pensiez vraiement qu'il faisait ça pour la gloire ?";
    //     }
    // }
