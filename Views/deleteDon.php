<?php
include '../Controller/donsC.php';
$donC = new donsC();
$donC->deleteDon($_GET["id_donation"]);
header('Location:admin.php');