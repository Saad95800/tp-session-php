<?php
$page = 'articles';
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
    <h1 class="articles">Liste des articles scientifiques</h1>
    <a href="logout.php"><div class="btn btn-danger">Se déconnecter</div></a>
    <a href="nav.php"><div class="btn btn-success">Navigation</div></a>
    <div class="card-deck row">
        <div class="card col-4">
            <img class="card-img-top" src="https://www.quebecscience.qc.ca/wp-content/uploads/2021/03/entrevue-historienne.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card col-4">
            <img class="card-img-top" src="https://www.quebecscience.qc.ca/wp-content/uploads/2021/03/entrevue-historienne.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card col-4">
            <img class="card-img-top" src="https://www.quebecscience.qc.ca/wp-content/uploads/2021/03/entrevue-historienne.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>