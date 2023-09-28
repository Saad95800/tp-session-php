<?php
session_start();

if(!isset($_SESSION['age'])){
    header("Location: index.php?error_access=1");
}

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
    <h1 class="navigation">Page de navigation</h1>
    <a href="logout.php"><div class="btn btn-danger">Se déconnecter</div></a>
    <a href="articles.php"><div class="btn btn-primary">Articles</div></a>
    <a href="movies.php"><div class="btn btn-success">Films</div></a>
    <a href="mangas.php"><div class="btn btn-warning">Mangas</div></a>
    <a href="cartoon.php"><div class="btn btn-secondary">Dessins annimées</div></a>
    <a href="toys.php"><div class="btn btn-info">Jouets</div></a>
</div>
</body>
</html>