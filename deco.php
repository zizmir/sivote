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
echo 'You have been logged out. <a href="/index.php">Go back</a>';
include 'close_site.php';