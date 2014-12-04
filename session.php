<?php
include 'lib/connection.php';
/**
 * Created by PhpStorm.
 * User: mbouznir
 * Date: 04/12/2014
 * Time: 15:10
 */
// je recupère les donnes utilisateur que je stock dans une variable
$pseudobdd = $bdd ->query('SELECT pseudo FROM util WHERE 1');
$pwdbdd = $bdd ->query('SELECT pwd FROM util WHERE 1');

//je stock les
$pseudoform=mysql_real_escape_string($_POST['pseudo']);
$pwdform=mysql_real_escape_string($_POST['pwd']);
if($pseudoform == $pseudobdd && $pwdform == $pwdbdd)
{
    session_start();
    $_SESSION['pseudo'] =$pseudoform;
    $_SESSION['pwd']=$pwdform;
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
    document.location.href="inscription.php";
    </script>
<?php
}
?>

