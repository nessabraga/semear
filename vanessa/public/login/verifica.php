<?php

use Database\Database;

//Recebendo email
if( isset($_POST['email']) ) {
    $email = $_POST['email'];
} else {
    $email = null;
}

//Recebendo senha
if( isset($_POST['senha']) ) {
    $senha = $_POST['senha'];
} else {
    $senha = null;
}

require_once "..src/model/Database.php";
$db = new Database();

var_dump($email);

$resultDb = $db->select(
    "SELECT * FROM dados WHERE email = '$email'; "
);

if($resultDb[0] != null) {
    $emailDb = $resultDb[0]->email;
    $senhaDb = $resultDb[0]->senha;
} else {
    $emailDb = null;
    $senhaDb = null;
}



if($email == $emailDb && $pass == $senhaDb) : ?>
    <script>
        alert("seja bem vindo!!");
         window.location.replace("../public/inicio.php");
    </script>
<?php else : ?>
    <script>
        alert("Acesso negado");
        window.location.replace("../public/index.php");
    </script>
<?php endif;