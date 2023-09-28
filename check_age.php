<?php
session_start();

if(isset($_SESSION['age'])){ // Sion est connecté
    if(in_array($page, ['toys', 'cartoon'])){ // Si on se trouve dans une page pour enfants
        if(intval($_SESSION['age']) > 17){ // Si on est adulte, on n'y a pas accès
            echo "Cette page est réservée aux enfants";
            die;
        }
    }
    if($page === 'articles'){ // Si on se trouve dans une page pour adultes
        if(intval($_SESSION['age']) < 18){ // Si on est enfant, on n'y a pas accès
            echo "Cette page est réservée aux adultes";
            die;
        }
    }
}else{
    header("Location: index.php?error_access=1");
}
?>