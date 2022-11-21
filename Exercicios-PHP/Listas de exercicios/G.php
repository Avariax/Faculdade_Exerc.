<!DOCTYPE html> 
 <html lang="pt-br"> 
 <head> 
     <meta charset="UTF-8"> 
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>Exercício Soma</title> 
 <body> 
 <h1>Exercício Funções Letra G - Soma dos valores</h1> 


 <?php 
     function soma_num(){ 
     $numeros = [1, 13, 22, 11, 9]; 
     $menor = 0; 
     $string="Valores no vetor: ".implode(",",$numeros).'<br>'; 
     echo $string; 
     foreach($numeros as $a){ 
         if($a > 0){ 
             $soma = array_sum($numeros); 
         } 
     } 
     echo "A soma dos valores do vetor é: ".$soma; 
 } 
 soma_num() 
     ?> 
      
      
 </body> 
 </html>