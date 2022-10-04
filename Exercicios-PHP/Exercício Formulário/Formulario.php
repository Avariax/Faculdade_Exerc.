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

    form{

        margin-left:40px;

    }

</style>
    
<body>
 
    <div class="container">

        <h1  style="text-align:center;">Formulário</h1>
        <p style="text-align:center;">Queriamos conhecer um pouco mais sobre os nossos clientes</p><br>

<form action="Resposta.php" method="GET">
  <label for="fname">Nome:</label><br>
    <input type="text" id="nome" name="nome"><br><br><br>

<label for="lname">Data de Nascimento:</label><br>
    <input type="month" id="data" name="data"><br><br><br>



<label for="lname">Telefone:</label><br>
    <input type="number" id="telefone" name="telefone"><br><br><br>

<label for="lname">Email:</label><br>
    <input type="text" id="email" name="email"><br><br>

<p>Sexo:</p>
  <input type="radio" id="masculino" name="sexo" value="Masculino">
    <label for="masculino">Masculino</label><br>
  <input type="radio" id="feminino" name="sexo" value="Feminino">
    <label for="feminino">Feminino</label><br>
  <input type="radio" id="outro" name="sexo" value="Outro">
    <label for="outro">Prefiro não informar</label><br><br>


  <input type="submit" value="Enviar">
</form>        

    </div>

</body>
</html>