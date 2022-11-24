<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
    <?php require('meta_head.php') ?>
    <title>Accueil</title>
</head>
<body>
    <h1 class='text-center'>Mot de passe oublié</h1><br>
    <form action='send_password.php' method='POST'>
        <div class='form-group'>
            <label for='email'>Entrer adresse email</label><br>
            <input type='email' id='email' name='email' required><br>
            <label for='email_confirm'>Confirmer adresse email</label><br>
            <input type='email' id='email_confirm' name='email_confirm' required><br>           
            <input type='submit' value='Envoyer'>
        </div>
    </form>
    <button href='login.php'>Annuler</button>
</body>
</html>