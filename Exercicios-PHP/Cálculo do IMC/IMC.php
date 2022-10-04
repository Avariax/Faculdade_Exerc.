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
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];
        $imc = $peso/pow($altura,2);

         
 if ($imc <=17) {
    echo "<h1>Muito abaixo do peso</h1>";
  }
 elseif ($imc <=25){
  echo "<h1>Peso normal</h1>";
  }
 elseif ($imc <=30){
  echo "<h1>Acima do peso</h1>";
  }
 elseif ($imc <=35){
  echo "<h1 >Obesidade I</h1>";
  }
 elseif ($imc <=40){
  echo "<h1>Obesidade II (severa)</h1>"; 
  }
 elseif ($imc > 40){
  echo "<h1>Obesidade III (mórbida)</h1>"; 
  }

    ?>
</body>
</html>