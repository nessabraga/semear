<?php

use Database\Database;

 require_once "../model/Database.php";
$db=new Database();

$nome = $_POST['nome'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

$db->insert(
    "INSERT INTO `dados`(`nome`, `phone`, `email`, `senha`, `cep`, `rua`, `bairro`, `cidade`, `uf`)
    VALUES ('$nome','$phone','$email','$senha','$cep','$rua','$bairro','$cidade','$uf')"
);
echo "<script>
          alert('Cadastrado com sucesso.');
      </script>
      <meta http-equiv='refresh' content='0, url=../public/login.php'>
";
?>