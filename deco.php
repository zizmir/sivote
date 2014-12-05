<?php
/**
 * Created by PhpStorm.
 * User: mbouznir
 * Date: 05/12/2014
 * Time: 11:38
 */
session_start();
session_destroy();
 include 'open_site.php';
echo 'Tu as été deconnecter . <a href="/index.php">revenir a l\'index</a>';
include 'close_site.php';