<?php
require_once("../persistencia/BD.php");

class Cliente {
  private $cpf;
  private $nome;
  private $endereço;
  private $telefone;

public function Cliente($cpf, $nome, $endereço, $telefone){

  $this->cpf = $cpf;
  $this->nome = $nome;
  $this->endereço = $endereço;
  $this->telefone = $telefone;
}

public function removerCliente($cpf){
  $sql="DELETE FROM cliente WHERE cpf = ?";
  try {
    $sql = $pdo->prepare($sql);
    $sql->bindParam(1, $cpf);
    $sql->execute();
    return "REMOVIDO";
  } catch (Exception $e) {
    echo "Erro na remoção: ".$e->getMessage();
    return "ERRO";
  }
}

public function consultarCliente($cpf){
  $sql = "SELECT nome, endereço, telefone FROM cliente Where cpf = ?"
  try {
    $sql = $pdo->prepare($sql);
    $sql->bindParam(1, $cpf);
    $sql->execute();
    while ($lista_resultado->$sql->fetch()) {

    }


  } catch (Exception $e) {

  }

}
public function inserirCliente($cliente){
  $sql = "INSERT INTO cliente (cpf, nome, endereço, telefone) VALUES (?, ?, ?, ?)";
  try {
    $sql = $pdo->prepare($sql);
    $sql->bindParam(1, $cliente->getCpf);
    $sql->bindParam(2, $cliente->getNome);
    $sql->bindParam(3, $cliente->getEndereço);
    $sql->bindParam(4, $cliente->getTelefone);
    $sql->execute();
    return "INSERIDO";
  } catch (Exception $e) {
    echo "Erro na inserção".$e->getMessage();
    return "ERRO";
  }

}
public function alterarCliente(){}
  $sql = "UPDATE cliente SET nome = ?, endereço = ?, telefone = ?, WHERE cpf = ?";
  try {
    $sql = $pdo->prepare($sql);
    $sql->bindParam(1, $cliente->getCpf);
    $sql->bindParam(2, $cliente->getNome);
    $sql->bindParam(3, $cliente->getEndereço);
    $sql->bindParam(4, $cliente->getTelefone);
    $sql->execute();
    return "ALTERADO";
  } catch (Exception $e) {
    echo "Erro na inserção".$e->getMessage();
    return "ERRO";
  }

  public function getCpf(){
    return $cpf;
  }
  public function setCpf($cpf){
    $this->cpf = $cpf;
  }
  public function getNome(){
    return $nome;
  }
  public function setNome($nome){
    $this->nome = $nome;
  }
  public function getEndereco(){
    return $endereço;
  }
  public function setEndereço($endereço){
    $this->endereço = $endereço;
  }
  public function getTelefone(){
    return $telefone;
  }
  public function setTelefone($telefone){
    $this->telefone = $telefone;
  }
}
?>
