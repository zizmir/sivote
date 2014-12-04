
<?php include 'open_site.php';

?>

<div>
        <h2>Vos identifiants</h2>
    <form method="POST" action="add_user.php">

            <p> Pseudo :   <input type="text" name="pseudo"></p>
            <p> Password :  <input type ="password" name="pwd"></p>
            <p> <input type="submit" class="button"></p>
            <p> </p>

    </form>
</div>

<?php



include 'close_site.php'; ?>
