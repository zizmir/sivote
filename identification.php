<?php
include 'lib/connection.php';
/**
 * Created by PhpStorm.
 * User: mbouznir
 * Date: 04/12/2014
 * Time: 15:10
 */
// je recupère les donnes utilisateur que je stock dans une variable
$pseudoform=mysql_real_escape_string($_POST['pseudo']);
$pwdform=mysql_real_escape_string($_POST['pwd']);

$result = $bdd ->query("SELECT * FROM util WHERE pseudo ='".$pseudoform."' AND pwd ='".$pwdbdd."'");



if(is_object($result))
{
    session_start();
    $_SESSION['pseudo'] =$pseudoform;


    ?>

    <script language="JavaScript">
        document.location.href="espace_membre.php"
    </script>
<?php
 }

else {
    ?>
    <script language="JavaScript">
        alert('membre non reconnu');
        document.location.href = "inscription.php";
    </script>
<?php
}
?>

