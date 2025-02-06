<?php
include '../c/participationC.php';

$clientC = new participationC();
$clientC->deletepart($_GET["cin"]);
header('Location:listpart.php');
?>