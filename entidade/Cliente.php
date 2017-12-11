<?php
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
