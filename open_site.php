
<?php
//session_start();
//unset($_SESSION['pseudo']);

include 'lib/connection.php'?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Sivote</Title>
                <link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
	</head>
        
	<body>

    
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
                                    <li><a class="button" href="log.php">Connexion</a></li>
                                    <li><a class="button" href="inscription.php">Inscription</a></li>
	                        </ul>
            </nav>