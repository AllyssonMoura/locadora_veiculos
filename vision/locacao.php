<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Alugue Seu Veículo</title>
  </head>

  <body>
    <fieldset>
      <legend>Sistema de Locação</legend>
      <form class="cadLocacao" action="../controller/veiculo.controller.php" method="post">
        <fieldset>
          <legend>Informações do Cliente</legend>
          <label>Nome: <input type="text" name="nome" required autofocus>*</label>
          <label>CPF: <input type="number" name="cpf" required autofocus>*</label>
          <label>Idade: <input type="number" name="idade" required autofocus>*</label>
        </fieldset>
        <fieldset>
          <legend>Informações do Veículo</legend>
          <label>Digite 1 para Passeio ou 2 para Executivo: <input type="text" name="veiculo" required autofocus>*</label>
          <br>
          <label>Digite 1 para GNV ou 2 para Gasolina: <input type="text" name="combustivel" required autofocus>*</label>
        </fieldset>
        <br>
        <input type="submit" value="Alugar">
        <input type="reset" value="Limpar">
      </form>
    </fieldset>
  </body>

</html>
