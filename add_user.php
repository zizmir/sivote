
<?php
include 'lib/connection.php';


var_dump($_POST['pseudo']);
$res = $bdd->prepare('INSERT INTO util(pseudo, pwd) VALUES ( ? ,? )');
$res->execute(array($_POST['pseudo'], $_POST['pwd']));


//           var_dump($bdd);
//             var_dump($article);
//--Fermeture du site -->
?>
<SCRIPT LANGUAGE="JavaScript">
    document.location.href="index.php"
</SCRIPT>


