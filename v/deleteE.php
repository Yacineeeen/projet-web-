<?php
include '../c/eventC.php';

$clientC = new eventC();
$clientC->deleteevent($_GET["ide"]);
header('Location:listevent.php');
?>