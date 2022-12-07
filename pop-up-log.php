<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png" /> -->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport" />
    <link href="https://animaproject.s3.amazonaws.com/home/favicon.png" rel="shortcut icon" type="image/png" />
    <meta content="website" name="og:type" />
    <meta content="photo" name="twitter:card" />
    <link href="css/pop-up-log.css" rel="stylesheet" type="text/css" />
    <link href="css/styleguide.css" rel="stylesheet" type="text/css" />
    <link href="css/globals.css" rel="stylesheet" type="text/css" />
  </head>
  <body style="margin: 0">
    <input id="anPageName" name="page" type="hidden" value="pop-up-log" />
    <div class="pop-up-log screen">
      <div class="pop_up_log">
      <body>
<?php
//Cas d'un utilisateur déconnecté
if(!isset($_SESSION['connected']) || $_SESSION['connected'] !== 1) {
    //Récupération des données en cas de formulaire d'identification rempli
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
    }

    //Connexion à la base de données
    include('Include/connexion.php');

    //Cas d'un utilisateur déconnecté tentant une connexion
    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {

        //Récupération des emails et mots de passe des utilisateurs de la base de données
        try {
            //Rédaction de la requête
            $sqlQuery = "SELECT emailUser FROM Utilisateur";
            //Préparation de la requête
            $requete = $db->prepare($sqlQuery);
            //Execution de la requête
            $requete->execute();
            //Récupération des résultats
            $listUsers = $requete->fetchAll();

            //Tableau de récupération des emails de la base de données
            $usersFromDB = [];

            //Entrée de chaque email dans le tableau de récupération
            foreach ($listUsers as $userSelected) {
                array_push($usersFromDB, $userSelected['emailUser']);
            }

            //Cas où l'email entré par l'utilisateur existe en base de données
            if(in_array($_SESSION['email'], $usersFromDB)) {
                try {
                    //Paramètres de la requête
                    $tableauParams4 = [
                        'emailUser' => $_POST['email'],
                    ];
                    //Rédaction de la requête
                    $sqlQuery4 = "SELECT mdpUser FROM Utilisateur WHERE emailUser=:emailUser";
                    //Préparation de la requête
                    $requete4 = $db->prepare($sqlQuery4);
                    //Execution de la requête
                    $requete4->execute($tableauParams4);
                    //Récupération des résultats
                    $mdpToCompare = $requete4->fetch();

                    //Cas où le mot de passe entré correspond à celui de la base de données
                    if(password_verify($_SESSION['password'], $mdpToCompare['mdpUser'])) {
                        //Statut connecté
                        $_SESSION['connected'] = 1;
                        //Redirection vers l'affichage de l'utilisateur connecté
                        header('Location: log.php');
                        exit;
                    }
                    //Cas où le mot de passe entré ne correspond pas à celui de la base de données
                    else {
                        //Renvoi du formulaire avec message erreur
                        include('Client/login.php');
                        echo "Désolé, votre connexion a échoué.";
                    }

                } catch (Exception $e) {
                    //Gestion d'erreur
                    die("Erreur: " . $e->getMessage());

                }
            }
            //Cas où l'email entré par l'utilisateur n'existe pas en base de données
            else {
                echo "Désolé, nous ne trouvons pas cet email dans notre base de données...";
            }

        } catch (Exception $e) {
            //Gestion d'erreur
            die("Erreur: " . $e->getMessage());

        }

    //Cas d'un utilisateur déconnecté n'ayant pas encore tenté de connexion
    } else {
        include('Client/login.php');

    }
}
//Cas d'un utilisateur connecté
else {
    //Affichage de la connexion
    include('Client/logged.php');
}
?>
</body>
      </div>
    </div>
    <script>
      closeOutsideOverlay("pop-up-contact");
    </script>
    <script>
      closeOutsideOverlay("pop-up-log");
    </script>
    <script>
      closeOutsideOverlay("pop-up-mentions");
    </script>
    <script>
      closeOutsideOverlay("pop-up-cart");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown-12");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown2");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown3");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown4");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown5");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown6");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown7");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown8");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown9");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown10");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown11");
    </script>
    <script>
      closeOutsideOverlay("submenu-dropdown12");
    </script>
  </body>
</html>
