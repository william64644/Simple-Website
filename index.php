<?php

date_default_timezone_set("America/Sao_Paulo");
date("Y / d / m - h:i:s");

include "html.html";

$pdo = new pdo("mysql:host=localhost;dbname=projeto01","root","");

if (isset($_POST["acao"])) {
    
    $email = $_POST["email"];
    $momento_registro = date("Y / d / m - h:i:s");

$sql = $pdo->prepare("INSERT INTO `registros` VALUES (null, ?,?)");

$sql->execute(array($email, $momento_registro));
}


?>