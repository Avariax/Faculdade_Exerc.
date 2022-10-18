<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        background-color:Gainsboro;
    }

    .container{
    position: fixed;
    width: 550px;
    height: 600px;
    background: white;
    left: 450px;
    top: 35px;
    }

</style>

<body>

    <div class="container" >
        <?php
            $nome = $_GET["nome"];
            $data = $_GET["data"];
            $email = $_GET["email"];
            $telefone = $_GET["telefone"];
            $sexo = $_GET ["sexo"];

            $texto ="<h1>Muito obrigado pela atenção $nome, agora confirme suas informações!</h1>
             <h3>Seu email: $email\n
             Numero de telefone: ($telefone)\n
             Sexo: $sexo\n
             Data de nascimento: $data</h3>";

             echo nl2br($texto);
            

            
    ?> 
    </div>

</body>
</html>