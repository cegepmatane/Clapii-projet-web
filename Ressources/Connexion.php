<?php
require('../SQL/filmSQL.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$usager = 'phpmyadmin';
$motdepasse = 'phpmyadmin-101010azer';
$hote = 'localhost';
$base = 'Clapii';
$dsn = 'mysql:dbname='.$base.';host=' . $hote. '';
$basededonnees = new PDO($dsn, $usager, $motdepasse);

?>