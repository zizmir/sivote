<?php include 'connection.php'?>
                <div id="corps">    
                <h2>Bienvenue sur sivote</h2>
                <p> 
                   Regle numéro 1: si tu vote sa passe si tu vote pas bah sa passe pas. Donnez des idées général
                </p>
                
                </div>
            <div  id="cour">
                <h2>Les idées récente</h2>
                <marquee direction="up" scrollamount="2" height="200" width="350">
                <?php
                $response = $bdd ->query('SELECT * FROM article LIMIT 10');

                while ($donnees = $response->fetch())
                {
                    ?>
                    <p>

                        <?php
                    echo '<h3>'. $donnees['titre'].'<br/></h3>';
                    echo $donnees['article'].'<br /><br/>';
                    ?>
                    </p>
                   <?php
                }

                 ?>

                </marquee>
            </div>
