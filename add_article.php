
<?php
include 'lib/connection.php';

// ajout d'un article
$titre=mysql_real_escape_string($_POST['titre']);
$article=mysql_real_escape_string($_POST['article']);
$user=mysql_real_escape_string($_POST['user']);

$res = $bdd->prepare('INSERT INTO article, util (titre , article , pseudo)   VALUES(?, ?, ?)');
$res->execute(array($titre, $article ,$user));

?>
<SCRIPT LANGUAGE="JavaScript">
    document.location.href="index.php"
</SCRIPT>


