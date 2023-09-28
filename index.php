<?php

$email = isset($_POST['email']) && !empty($_POST['email']);
$mdp = isset($_POST['mdp']) && !empty($_POST['mdp']);
$age = isset($_POST['age']) && !empty($_POST['age']);

$message = '';

if(!empty($_POST)){ // Si on a validé un formulaire

    if(!$age){
        $message = "Veuillez saisir un age correct !";
    }

    if(!$mdp){
        $message = "Veuillez saisir un mot de passe correct !";
    }

    if(!$email){
        $message = "Veuillez saisir un email correct !";
    }

}

if(isset($_GET['error_access']) && $_GET['error_access'] == 1){
    $message = "Vous navez pas acces a cette page";
}

if($email && $mdp && $age){
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['mdp'] = $_POST['mdp'];
    $_SESSION['age'] = $_POST['age'];

    header("Location: nav.php");
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
        <?php if($message): ?>
            <div class="alert alert-danger" role="alert">
                <?= $message ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="mdp" placeholder="Enter password" name="mdp">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-range" id="age" name="age">
        </div>

        <div class="form-check mb-3">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>        
    </div>


</body>
</html>
