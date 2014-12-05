<?php
session_start();
$_SESSION['pseudo'] ;




include 'open_site.php';

/**
 * Created by PhpStorm.
 * User: mbouznir
 * Date: 04/12/2014
 * Time: 15:16
 */
$response = $bdd ->query("SELECT * FROM util , article WHERE  util.id_user = article.id AND pseudo ='".$pseudoform."'");
?>
<div class="worst">
    <?php
echo 'Bienvenue '.$_SESSION['pseudo'].'! <br>';
    while ($donnees = $response->fetch())
    {
        echo '<h3>'. $donnees['titre'].'</h3><br/>';
        echo $donnees['article'].'<br />';
    }
    ?>

<?php include 'close_site.php'; ?>