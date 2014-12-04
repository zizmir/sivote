<!-- Ouverture du site -->
<?php include 'open_site.php'; ?>

<!-- Formulaire d'ajout d'article -->
    <div>   

        <form method="post" action="add_article.php">
         <p>
             Titre:</br> <input type="text" name="titre"><br>
         </p>
         <p>
             L'idée:<br><textarea name='article' cols="40" rows="5"> </textarea><br>
         </p>
            <p>
             </br> <input  type="submit" class="button" ><br>
            </p>
        </form>

       </div>
<!-- fermeture du site -->
 <?php include 'close_site.php'; ?>