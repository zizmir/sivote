<?php session_start(); ?>
<?php include 'open_site.php';
?>
  <div class="worst">
      <?php
                $response = $bdd ->query('SELECT * FROM article LIMIT 10');

                while ($donnees = $response->fetch())
                {
                    echo '<h3>'. $donnees['titre'].'<br/></h3>';
                    echo $donnees['article'].'<br />';

                }
                 ?>
  </div>
  <?php include 'close_site.php'; ?>
