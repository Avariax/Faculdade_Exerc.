<!DOCTYPE html> 
 <html lang="pt-br"> 
 <head> 
     <meta charset="UTF-8"> 
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>Conversão de Temperatura</title> 
 </head> 
 <body> 
 <h1>Exercício Funções Letra E - Fahrenheit para Celsius</h1> 
     <?php 
     Function convert_temp($i){ 
     $f=$i; 
     $c= ($f-32)/18; 

     echo "Se a temperatura em Fahrenheit é ".$f."º, a temperatura em celsius será ".$c."º."; 
     } 
     convert_temp(90); 
     echo'<br>'; 
     convert_temp(77); 
     echo'<br>'; 
     convert_temp(52); 
     echo'<br>'; 
     convert_temp(12); 
     ?> 
 </body> 
 </html>
