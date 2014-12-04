<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sivote', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
