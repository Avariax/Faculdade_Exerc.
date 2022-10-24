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


            echo "<h1 style=text-align:center >Obrigado pela atenção <br>";
    

             function gravar($txt){
                $arquivo = "meu_arquivo.txt";
                
                $fp = fopen($arquivo, "a+");
            
                fwrite($fp, $txt);
                
                fclose($fp);
            }
            
            gravar("$nome.$data.$email.$telefone.$sexo");

            function ler(){
                $arquivo = "meu_arquivo.txt";
                
                $fp = fopen($arquivo, "r");
            
                $conteudo = fread($fp, filesize($arquivo));
                
                fclose($fp);
                
                return $conteudo;
            }
            
            echo ler();

            
    ?> 
    </div>

</body>
</html>