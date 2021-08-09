<?php

//---- Main page components ----//

echo "tesasssdfsdfldjkfghhlfdjte";

include "setups.html";

include "header.html";

include "home.html";

include "footer.html";

//---- Email Register ----//

$pdo = new pdo("mysql:host=localhost;dbname=projeto01","root","");

if (isset($_POST["acao"])) {

    $email = $_POST["email"];
    $momento_registro = date("Y / d / m - h:i:s");

    $sql = $pdo->prepare("INSERT INTO `registros` VALUES (null, ?,?)");
    $sql->execute(array($email, $momento_registro));

}

?>