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

            echo "<h1>Muito obrigado pela atenção $nome, Iremos mandar um email para ($email) validando
            seu telefone ($telefone) e a sua data de aniversario ($data).</h1> "
            

            
    ?> 
    </div>

</body>
</html>