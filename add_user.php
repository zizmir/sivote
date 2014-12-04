
<?php
include 'lib/connection.php';

$pseudo =mysql_real_escape_string( $_POST['pseudo']);
$pwd = mysql_real_escape_string($_POST['pwd']);

if (!empty($pseudo) && !empty($pwd)) {
    var_dump($pseudo);
    $res = $bdd->prepare('INSERT INTO util(pseudo, pwd) VALUES ( ? ,? )');
    $res->execute(array($pseudo, $pwd));


}
else {
    ?>
    <script>alert('Veuillez completer le formulaire')</script>
    <SCRIPT LANGUAGE="JavaScript">
        document.location.href = "Inscription.php"
    </SCRIPT>
<?php
}
?>
<SCRIPT LANGUAGE="JavaScript">
    document.location.href="index.php"
</SCRIPT>


