<?php
include("core/header.php");
include("core/db_connect.php");
include("/xampp/htdocs/programming/school_programming/php/p5/eindopdracht/function/woorden.php");
// $db = new Database;

$readWoorden = new woorden;
$readWoordenFunctie = $readWoorden->readWoorden();

$deleteWoorden = new woorden;
$deleteWoordenFunctie = $deleteWoorden->deleteWoord();

include("core/footer.php")
?>