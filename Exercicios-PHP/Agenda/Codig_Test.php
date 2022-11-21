<?php

//-----------------------------------CONEXÃO--------------------------------------
try 
{
  $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost:3307","root","");
 
}
 catch (PDOException $e) {
  echo"Erro com banco de dados:".$e->getMessage();
}
catch (Exception $e) {
  echo"Erro:".$e->getMessage();

}
//-----------------------------------INSERT--------------------------------------

//1-FORMA

/*
$res = $pdo->prepare("INSERT INTO pessoa(nome,telefone,email)
VALUES (:n, :t, :e)");

$res->bindValue (":n","Mirian");
$res->bindValue (":t","000000");
$res->bindValue (":e","test@gmail.com");
$res->execute();

//2-FORMA:

$pdo->query("INSERT INTO pessoa(nome,telefone,email)
VALUES ('Paulo','210000000','ju@gmail.com')")
*/

//-----------------------------------DELETE -------------------------------

//1-FORMA

/*
$cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
$id = 6;
$cmd->bindValue(":id",$id);
$cmd->execute();
*/

//2-FORMA

//$res = $pdo->query("DELETE FROM pessoa WHERE id = '7'");

//-----------------------------------UPDATE--------------------------------------

//1-FORMA
/*
$cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");

$cmd->bindValue(":e","Miriam@gmail.com");
$cmd->bindValue(":id",5);
$cmd->execute();
*/

//2-FORMA
//$res = $pdo->query("UPDATE pessoa SET email = 'Marialian@gmail.com' WHERE id = '5'");

//-----------------------------------SELECT--------------------------------------

//1-FORMA
/*
$cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
$cmd->bindValue(":id",5);
$cmd->execute();
$resultado = $cmd->fetch(PDO::FETCH_ASSOC);
//           $cmd->fetchAll();
/*
echo"<pre>";
print_r($resultado);
echo"<pre>";
*/

//OU
/*
foreach($resultado as $key =>$value)
{
  echo $key.": ".$value."<br>";
}
*/







?>