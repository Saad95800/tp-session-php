<?php
$page = 'mangas';
require 'check_age.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    
</head>
<body>
<div class="container">
<h1 class="articles">Liste de mangas</h1>
    <a href="logout.php"><div class="btn btn-danger">Se déconnecter</div></a>
    <a href="nav.php"><div class="btn btn-success">Navigation</div></a>
    <div class="card-deck row">
        <div class="card col-4">
            <img class="card-img-top" src="https://fr.web.img6.acsta.net/pictures/21/01/06/13/19/2738670.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Black Clover</h5>
            </div>
        </div>
        <div class="card col-4">
            <img class="card-img-top" src="https://fusion.molotov.tv/arts/i/446x588/Ch8SHQoUNVVcKHdbhf2ml_wtVG8gsFgiv1YSA2pwZxgBCh8IARIbChS5oyuPmLbpMYeKnUVKB9XZgXlS0hIDcG5n/jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">L'attaque des titans</h5>
            </div>
        </div>
        <div class="card col-4">
            <img class="card-img-top" src="https://fr.web.img6.acsta.net/pictures/19/09/18/13/46/0198270.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Demon Slayer</h5>
            </div>
        </div>
    </div>
</div>
</body>
</html>