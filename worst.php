<?php session_start(); ?>
<!-- Ouverture du site -->
<?php

include 'open_site.php';


$response = $bdd ->query('SELECT * FROM article ORDER By article DESC  ');
?>
<div class="worst">
    <?php
while ($donnees = $response->fetch())
{
    echo '<h3>'. $donnees['titre'].'</h3><br/>';
    echo $donnees['article'].'<br />';

}
?>
</div>
<?php include 'close_site.php'; ?>
