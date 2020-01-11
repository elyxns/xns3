<?php

include "conexao.php";

$user  = $_POST['user'];
$senha = $_POST['senha'];
$nick  = $_POST['nick'];

echo "Nome do User {$user} <br>";
echo "Senha do User {$senha} <br>";
echo "Nick do User {$nick} <br>";


$sql ="insert into login (user,senha,nickname) values ('$user','$senha','$nick')";

$qry = mysqli_query($con,$sql);

if(!$con){
    echo "Não conectou ao banco de dados";
}

?>