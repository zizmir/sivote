<?php
include 'lib/connection.php';
/**
 * Created by PhpStorm.
 * User: mbouznir
 * Date: 04/12/2014
 * Time: 15:10
 */
$pseudobdd = $bdd ->query('SELECT pseudo FROM util WHERE 1');
$pwdbdd = $bdd ->query('SELECT pwd FROM util WHERE 1');

$pseudoform=$_POST['pseudo'];
$pwdform=$_POST['pwd'];
if($pseudoform == $pseudobdd && $pwdform == $pwdbdd)
{
    session_start();
    $_SESSION['pseudo'] =$pseudoform;
    $_SESSION['pwd']=$pwdform;

 }
else {
   ?>
    <script>
    alert('membre non reconnu');
    </script>
<?php
}
?>
<SCRIPT LANGUAGE="JavaScript">
    document.location.href="espace_membre.php"
</SCRIPT>
