$contenu = echo '<img src="../assets/image/logo.png" width="100%" class="header">';
$contenu .= echo '<div class="text-center text-uppercase col-12 pb-1 pt-3" style="background-color : #fafc3a;"><p>Votre solution pour la livraison de graviers, sables, béton, sables stabilisés,...</p></div>';
$contenu .= echo "<h4>Adresse du destinataire</h4>";
$contenu .= echo "<p>".$_POST['nom']."</p>";
$contenu .= echo "<p>".$_POST['email']."</p>";
$contenu .= echo "<p>".$_POST['tel']."</p>";
$contenu .= echo "<p>".$_POST['adresse']."<br>";
$contenu .= echo $_POST['commune']."</p>";
$contenu .= echo "<h4>Commande</h4>";
$contenu .= echo '<table class="table table-light col-5 mx-auto">';
$contenu .= echo '<tr class="table-secondary"><th>Libellé</th><th>Quantité</th></tr>';
$contenu .= echo '<tr class="text-left">';
$contenu .= echo '<td>'.$_POST['libelle'].'</td><td>'.$_POST['quantite'].'</td>';
$contenu .= echo '<tr class="mx-1 text-center table-secondary"><td colspan='5' class="bg-light p-2">'.$_POST['total'].'</td></tr>';
$contenu .= echo '</table>';