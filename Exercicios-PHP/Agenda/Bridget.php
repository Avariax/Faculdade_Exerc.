<?php

Class Pessoa{

    private $pdo;

//-------------------------------CONEXÃO------------------------------
    public function __construct($dbname, $host, 
    $user, $senha)
    {
        try 
        {  
                                
            $this->pdo = new PDO("mysql:host=localhost:3307;dbname=crudpdo", "root", "");
        } 
        catch (PDOException $e) {
                echo "Erro com banco de dados: ".$e->
                getMessage();
                exit();
        }
        catch (Exception $e) {
                echo "Erro generico: ".$e->
                getMessage();
                exit();
        }
    }
    
    //-------------------------------SELECT DO LADO DIREITO------------------------------
    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
        
    }
    public function cadastrarPessoa ($nome, $telefone, $sexo, $data_de_nascimento, $email)
    {
        $cmd = $this->pdo->prepare("SELECT id FROM pessoa WHERE
        email = :e");
        $cmd->bindValue(":e",$email);
        $cmd->execute();
        if($cmd->rowCount() > 0)
        {
            return false;
        }
            else
        {
            $cmd = $this->pdo->prepare("INSERT INTO pessoa(nome, telefone, sexo, data_de_nascimento, email) VALUES (:n, :t, :s, :d, :e)");
                    $cmd->bindValue(":n",$nome);
                    $cmd->bindValue(":t",$telefone);
                    $cmd->bindValue(":s",$sexo);
                    $cmd->bindValue(":d",$data_de_nascimento);
                    $cmd->bindValue(":e",$email);
                    $cmd->execute();
                    return true;
        }
    }

    public function excluirPessoa($id)
    {
        $cmd = $this->pdo->prepare("DELETE FROM pessoa WHERE id = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
    }
}


?>