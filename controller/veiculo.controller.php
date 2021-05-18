<?php
include "../model/veiculo.class.php";

$veiculo = new Veiculo;

$veiculo->setNome($_POST['nome']);
$veiculo->setCpf($_POST['cpf']);
$veiculo->setIdade($_POST['idade']);
$veiculo->setVeiculo($_POST['veiculo']);
$veiculo->setCombustivel($_POST['combustivel']);

echo "<br>Nome: ".$veiculo->getNome();
echo "<br>CPF: ".$veiculo->getCpf();
echo "<br>Idade: ".$veiculo->getIdade();
echo $veiculo->escolhaVeiculo();
echo $veiculo->escolhaCombustivel();
echo "<br>Valor Total da Locação (GNV): R$ ".$veiculo->valorLocacaoGNV();
echo "<br>Valor Total da Locação (Gasolina): R$ ".$veiculo->valorLocacaoGasolina();
date_default_timezone_set('America/Sao_Paulo');
echo "<br>Data: ".$data = date('d/m/Y');
echo "<br>Hora: ".$hora = date('H:i');
 ?>
