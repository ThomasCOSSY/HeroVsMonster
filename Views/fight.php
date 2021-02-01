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
    <img src="../assets/img/<?php echo $nomimages[$affimage]; ?>.gif" alt="monstre" style="height: 20rem;" >
</div>
<div  class="hero" style="height: 50rem;">           
        <img src="../assets/img/<?php echo $_GET['character'] ?>.gif" alt="hero" style="height: 50rem;" id="hero">
              
</div>
</div>


<div class="button1 mt-5">
<button href="fight.php">test</button>
</div>
    











    

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