<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inverter Array</title>
</head>
<body>
    <?php

$letras= ["a","z","m"];

for($i = 0; $i < count($letras); $i++)
 echo $letras[$i] . "<br>";
echo "<br>";
 echo '<p>Invertendo!<p>';
function inverter(){
$letras= ["a","z","m"];
$letras = array_reverse($letras, false); 
for($i = 0; $i < count($letras); $i++)
  echo $letras[$i] . "<br>";
}
inverter();
    ?>
</body>
</html>
