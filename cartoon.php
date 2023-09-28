<?php
$page = 'cartoon';
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
<h1 class="articles">Liste de dessins animées</h1>
    <a href="logout.php"><div class="btn btn-danger">Se déconnecter</div></a>
    <a href="nav.php"><div class="btn btn-success">Navigation</div></a>
    <div class="card-deck row">
        <div class="card col-4">
            <img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/71Eu88UKBJL.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Raya et le dernier dragon</h5>
            </div>
        </div>
        <div class="card col-4">
            <img class="card-img-top" src="https://fr.web.img4.acsta.net/medias/nmedia/18/73/01/74/19343191.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Dragons</h5>
            </div>
        </div>
        <div class="card col-4">
            <img class="card-img-top" src="https://play-lh.googleusercontent.com/Tl35PcW2kLjr_mK4sBlBD-t7yiuoQAbPMTuyNCTFlF6zT_XBPQjn6MtqLTR6Lonz1tTV=w240-h480-rw" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Pat patrouille</h5>
            </div>
        </div>
    </div>
</div>
</body>
</html>