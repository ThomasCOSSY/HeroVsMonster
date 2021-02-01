<?php
require "../Controller/fightController.php";
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeroVsMonster</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>


<div class="background" style="width: 100%;">

<div style="height: 30rem;" id="monster" class="ml-5">
    <img src="../assets/img/<?php echo $_SESSION["monster"]->getName() ?>.gif" alt="monstre" style="height: 20rem;" >
</div>
<div  class="hero" style="height: 50rem;">           
        <img src="../assets/img/<?php echo $_SESSION["character"]->getName() ?>.gif" alt="hero" style="height: 50rem;" id="hero">
              
</div>
</div>


<div class="button1 mt-5">
<button><a href="fight.php?character=<?= $_SESSION["character"]->getName() ?>&monster=<?= $_SESSION["monster"]->getName() ?>">test</a></button>
</div>
    

<?php echo "Le monstre inflige " . $_SESSION["monster"]->getWeaponDamage() . " dégats ! mais " . $_SESSION["character"]->getShield() . " bloque " . $_SESSION["character"]->getShieldValue() . " dégats, il subit donc " . ($_SESSION["monster"]->getWeaponDamage() - $_SESSION["character"]->getShieldValue()) . " point de dégats, il lui reste " . $_SESSION["character"]->getHealth() . " point de vie !!! <br>";
 
 var_dump($_SESSION["character"]);
 
 ?>










    

    <!-- <div class="">
        <figure>
            <audio autoplay controls loop src="../assets/music/battle1.mp3">
            </audio>
        </figure>
    </div> -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>