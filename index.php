<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <div class="m-auto text-center">
        <h1>Choisissez votre champion</h1>
    </div>


    <div class="row">
        <div class="d-flex justify-content-around align-items-center">
            <a href="views/fight.php?character=paladin&monster=">
                <img src="assets/img/paladin.gif" alt="paladin" class="col-4" id="paladin" style="height: 100%; width: auto;">
            </a>
            <a href="views/fight.php?character=mage">
                <img src="assets/img/mage.gif" alt="mage" class="col-4" id="mage"  style="height: 100%; width: auto;">
            </a>
        </div>
    </div>

    <div class="row">
        <div class="d-flex justify-content-around align-items-center">

            <a href="views/fight.php?character=assassin">
                <img src="assets/img/assassin.gif" alt="assassin" class="col-4" id="assassin"  style="height: 100%; width: auto;">
            </a>
            <a href="views/fight.php?character=developpeur">
                <img src="assets/img/developpeur.gif" alt="developpeur web" class="col-4 " style="height: 50%; width: auto;" id="developpeur">
            </a>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>