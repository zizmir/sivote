
<?php
include 'lib/connection.php';

// ajout d'un article
$titre=mysql_real_escape_string($_POST['titre']);
$article=mysql_real_escape_string($_POST['article']);
$res = $bdd->prepare('INSERT INTO article  (titre , article) VALUES(?, ?)');
$res->execute(array($titre, $article));

?>
<SCRIPT LANGUAGE="JavaScript">
    document.location.href="index.php"
</SCRIPT>


