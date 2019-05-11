<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Commande</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <style type="text/css">
        a:hover {
            color: #222;
        }
    </style>
</head>
<body>
<div class="container">
    <header class="col-xs-12 mt-5 pull-right">
            <img src="../assets/image/logo.png" width="100%" class="header">
            <div class="text-center text-uppercase pb-1 pt-3" style="background-color : #fafc3a;">
                <p>Votre solution pour la livraison de graviers, sables, bêton, sables stabilisés,...</p>
            </div>
    </header>
</div>
<div class="container">
   <div class="content">
        <div class="py-2 pt-2">
            <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                          <li class="breadcrumb-item"><a href="../../index.php">Gravissime</a></li>
                        <li class="breadcrumb-item">Commande</li>
                      </ol>
                </nav>
            <div class="container text-center border col-10 col-md-8 border-secondary">
                <?php
                        include 'header.php';
                            $login=$_POST['login'];
                            $mdp=$_POST['pass'];
                            $req = $bdd->prepare('SELECT * FROM utilisateur WHERE login= :pseudo');
                            $req->execute(array(
                                'pseudo' => $login));
                            $resultat = $req->fetch();
                            if ($login != $resultat['login'])
                                {
                                    echo 'Mauvais identifiant !';
                                    ?>
                                    <p class="m-2"><a href="panier.php" class="m-1 btn btn-light">Réessayer</a><a href="connexion_oubli.php" class="m-1 btn btn-light">Login oublié ?</a></p>
                                    <?php
                                }
                                else
                                {
                                    if ($mdp == $resultat['password']) {
                                        echo 'Bonjour <span class="text-uppercase">'.$resultat['nom_ut'].'</span><span class="text-capitalize"> '.$resultat['prenom'].'</span>';
                ?>, voulez-vous continuer cette commande ?
                                        <div class="container">
                                           <center>
                                            <div class="m-2 col-3 row">
                                                <a href="commande.php" class="m-1 btn btn-light">Oui</a>
                                                    <input name="login" type="hidden" value="<?=$login;?>">

                                                <a href="panier.php" class="m-1 btn btn-light">Non</a>
                                            </div>
                                            </center>
                                        </div>
                                        <?php
                                    }
                                    else {
                                        echo 'Mauvais mot de passe !';
                                        ?>
                                        <p class="m-2"><a href="panier.php" class="m-1 btn btn-light">Réessayer</a><a href="connexion_oubli.php" class="m-1 btn btn-light">Mot de passe oublié ?</a></p>
                                        <?php
                                    }
                                }
                ?>
            </div>
       </div>
    </div>
</div>
<div class="container">
    <footer class="col-xs-12">
        <?php
          include 'footer.php';  
        ?>
    </footer>
</div>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
</body>
</html>