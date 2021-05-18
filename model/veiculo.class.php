<?php

class Veiculo {

  private $nome;
  private $cpf;
  private $idade;
  private $veiculo;
  private $combustivel;

  function Veiculo() {

  }

  public function getNome() {
      return $this->nome;
  }
  public function setNome($nome) {
      $this->nome = $nome;
  }

  public function getCpf() {
      return $this->cpf;
  }
  public function setCpf($cpf) {
      $this->cpf = $cpf;
  }

  public function getIdade() {
      return $this->idade;
  }
  public function setIdade($idade) {
      $this->idade = $idade;
  }

  public function getVeiculo() {
      return $this->veiculo;
  }
  public function setVeiculo($veiculo) {
      $this->veiculo = $veiculo;
  }

  public function getCombustivel() {
      return $this->combustivel;
  }
  public function setCombustivel($combustivel) {
      $this->combustivel = $combustivel;
  }

  public function escolhaVeiculo() {
    switch ($this->veiculo) {
      case 1:
        $mensagemv = 'Passeio';
        break;
      case 2:
        $mensagemv = 'Executivo';
        break;
      default:
        $mensagemv = 'Opção Não disponível';
        break;
    }
    echo "<br>Veículo: ".$mensagemv;
  }

  public function escolhaCombustivel() {
    switch ($this->combustivel) {
      case 1:
        $mensagemg = 'GNV';
        break;
      case 2:
        $mensagemg = 'Gasolina';
        break;
      default:
        $mensagemg = 'Opção Não disponível';
        break;
    }
    echo "<br>Combustível: ".$mensagemg;
  }

  public function valorLocacaoGNV() {
    return 200.00 + 50.00;
  }

  public function valorLocacaoGasolina() {
    return 200.00 + 100.00;
  }
}
 ?>
