<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 2022</title>
  <style>
    body{
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    form{
      display: flex;
      flex-direction: column;
      width: 400px;
      background-color: lightslategray;
      align-items: center;
      font-family: sans-serif;
      padding-bottom: 15px;
    }input{
      width: 150px;
      margin-bottom: 5px;
    }h1{
      font-size: 30px;
      text-shadow: 1px 2px 3px lightsteelblue;
      color: black;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <form name="formDados" action="02.php" method="POST">
    <h1>Calculadora de IMC</h1>
    Nome: <input type="text" name="form-nome">
    Sexo: <select name="form-sexo">
      <option value="homem">Masculino</option>
      <option value="mulher">Feminino</option>
    </select>
    Peso: <input type="text" name="form-peso" required>
    Altura: <input type="text" name="form-alt" required>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>