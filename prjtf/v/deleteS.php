<?php
include '../c/sponsorC.php';

$clientC = new sponsorC();
$clientC->deletesponsor($_GET["ids"]);
header('Location:listsponsor.php');
?>