
<?php
$_SESSION['pseudo'];



include 'lib/connection.php'?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Sivote</Title>
                <link rel="stylesheet" href="style.css">



	</head>
        
	<body>

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        $('body').html('Hello world']);
    </script>
            <header>
                  <h1>Sivote</h1>
                  <h4>develloper by Bouznir M'bark</h4>
            </header>
            <nav id="menu">
	                        <ul id="subs">
                                    <li><a class="button" href="index.php">Home</a></li>
                                    <li><a class="button" href="edit_vote.php">Poster une idée</a></li>
                                    <li><a class="button" href="best.php">Le top</a></li>
                                    <li><a class="button" href="worst.php">Le flop</a></li>
                                <?php
                                if(!isset($_SESSION['pseudo'])){
                                ?>
                                    <li><a class="button" href="log.php">Connexion</a></li>
                                    <li><a class="button" href="inscription.php">Inscription</a></li>
                                <?php
                                }
                                else
                                {
                                    ?>
                                    <li><a class="button" href="espace_membre.php">Mon espace</a></li>
                                    <li><a class="button" href="deco.php">Deconnexion</a></li>

                                    <?php
                                }
                                ?>
	                        </ul>
            </nav>


