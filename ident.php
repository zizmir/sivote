
<?php
include 'lib/connection.php';

//var_dump($_POST['login']);

$res = $bdd->prepare('INSERT INTO article  (titre , article) VALUES(?, ?)');
$res->execute(array($_POST['titre'], $_POST['article']));


//           var_dump($bdd);
//             var_dump($article);
//--Fermeture du site -->
?>
<SCRIPT LANGUAGE="JavaScript">
    document.location.href="index.php"
</SCRIPT>


