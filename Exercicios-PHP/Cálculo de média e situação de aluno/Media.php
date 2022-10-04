<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $nome = $_GET["nome"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $media = ($nota1+$nota2)/2;

            if ($media >=6) {
                echo "Olá! $nome sua nota final é $media você está APROVADO!";
              }
            else if ($media <6) {
                echo "Olá! $nome sua nota final é $media você está REPROVADO!";
              }

       
        


    ?>
</body>
</html>