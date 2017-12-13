<?php
require_once("../config.php");

  if(isset($_POST['CPF']) && empty($_POST['CPF']) == false){
    $cpf = addslashes($_POST['CPF']);
    $nome = addslashes($_POST['nome']);
    $endereco = addslashes($_POST['endereco']);
    $telefone = addslashes($_POST['telefone']);

    $sql = ("SELECT * FROM clliente WHERE cpf = ? AND nome = ? AND endereço = ? AND telefone = ?");
    $sql = $pdo->prepare($sql);
    $sql->bindValue(1, $cpf);
    $sql->bindValue(2, $nome);
    $sql->bindValue(3, $endereco);
    $sql->bindValue(4, $telefone);
    $sql->execute();

    if($sql->rowCount() > 0){
      $sql = $sql->fetchAll();
      echo "<pre>";
      print_r($sql);
      echo "</pre>";
    }
}else{
   	echo "<h2>Algum campo nao foi preenchido</h2>";
}
?>