<?php
  if(!empty($_POST['CPF']) && !empty($_POST['nome']) &&
  !empty($_POST['endereço']) && !empty($_POST['telefone'])) {
    $cpf = $_POST['CPF'];
    file_put_contents("gerado.txt", $cpf, FILE_APPEND);
    $nome = $_POST['nome'];
    file_put_contents("gerado.txt", $nome, FILE_APPEND);
    $endereco = $_POST['endereço'];
    file_put_contents("gerado.txt", $endereco, FILE_APPEND);
    $telefone = $_POST['telefone'];
    file_put_contents("gerado.txt", $telefone, FILE_APPEND);

    header("Location: index.php");
  }
  else{
    echo "ALGUM CAMPO NÃO FOI DIGITADO";
  }
  ?>
