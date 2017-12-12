<?php
require_once("persistencia/BD.php");
$cpf = "111.111.111-11";
$sql = "SELECT * FROM cliente Where cpf = ?";

  $sql = $pdo->prepare($sql);
  $sql->bindValue(1, $cpf);
  $sql->execute();
  $x = $sql->fetch();
  print_r($x);
  exit;
?>
