
<?php include 'open_site.php';


$response = $bdd ->query('SELECT * FROM article ORDER By article DESC  ');
?>
<div class="worst">
    <?php
while ($donnees = $response->fetch())
{
    echo '<h3>'. $donnees['titre'].'<br/></h3>';
    echo $donnees['article'].'<br />';

}
?>
</div>
<?php include 'close_site.php'; ?>
