<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            width: 100px;
            background-color: blue;
            color: whitesmoke;
        
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['form-nome'];
            $peso = $_POST['form-peso'];
            $sexo = $_POST['form-sexo'];
            $altura = $_POST['form-alt'];
            
            $imc = $peso / ($altura*$altura);
            if($sexo == "mulher"){
                if($imc < 19){
                    echo 'Abaixo do peso';
                }else if($imc > 19 && $imc < 25){
                    echo 'Peso normal';
                }else if($imc > 25 && $imc < 27){
                    echo 'Um pouco acima do peso';
                }else if($imc > 27 && $imc < 32){
                    echo 'Acima do peso';
                }else{
                    echo 'Obeso';
                }
            }
            if($sexo == "homem"){
                if($imc < 20){
                    echo 'Abaixo do peso';
                }else if($imc > 20 && $imc < 26){
                    echo 'Peso normal';
                }else if($imc > 26 && $imc< 28){
                    echo 'Um pouco acima do peso';
                }else if($imc > 28 && $imc < 31){
                    echo 'Acima do peso';
                }
            }
          }
    ?>
    <br>
    <button><a href="01.php">Voltar</a></button>
</body>
</html>