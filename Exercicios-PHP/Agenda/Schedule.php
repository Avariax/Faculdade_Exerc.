<?php
require_once 'Bridget.php';
$p = new Pessoa ("crudpdo","localhost:3307","root","");

?>

<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Agenda</title>
</head>
<body>
    <?php
    if(isset($_POST['Nome']))
    {
        $nome = addslashes($_POST['Nome']);
        $telefone = addslashes($_POST['Telefone']);
        $sexo = addslashes($_POST['Sexo']);
        $data_de_nascimento = addslashes($_POST['Data_de_nascimento']);
        $email = addslashes($_POST['Email']);
        if (!empty($nome) && !empty($telefone) && !empty($sexo) && !empty($data_de_nascimento) && !empty($email))
        {
            if (!$p->cadastrarPessoa ($nome, $telefone, $sexo, $data_de_nascimento, $email))
            {
                echo"Email já cadastrado";
            }
           
        }
        else
        {
            echo"preencha todos os campos";
        }
    }
    
    ?>
<section id="direita">
    <form method="POST">
        <h2>Cadastrar</h2>
            <label for="nome">Nome:</label>
                <input type="text" id="nome" name="Nome">
                
            <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="Telefone">

            <label for="sexo">Sexo:</label>
                <input type="text" id="sexo" name="Sexo">

            <label for="data_de_nascimento">Data de nascimento:</label>
                <input type="text" id="data_de_nascimento" name="Data_de_nascimento">

            <label for="email">Email:</label>
                <input type="text" id="email" name="Email">
                    <input type="submit" value="Cadastrar">   
    </form>
</section>

<section id="esquerda">
    <table>
        <tr class="titulo">
            <th>Nome</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Data</th>
            <th colspan="2">Email</th>
        </tr>
<?php
    $dados = $p->buscarDados();
   if(count($dados) > 0)
   {
        for ($i=0; $i < count($dados); $i++)
        {
            echo "<tr>";
            foreach ($dados[$i] as $k => $v)
            {
                if($k != "id")
                {
                    echo"<td>".$v."</td>";
                }
            }
            ?>
        <th>
            <a href="">Editar</a>
            <a href="Schedule.php?ID=<?php echo $dados[$i]['id']; ?>">Excluir</a>
        </th>
        <?php 
        echo"</tr>";
            
        }
        
   } 
   else
   {
    echo "Ainda não há pessoas cadastradas";
   }
   
?>

    </table>
</section>
    
</body>
</html>

<?php 

if(isset ($_GET['ID']))
{
    $id_pessoa = addslashes($_GET['ID']);
    $p->excluirPessoa($id_pessoa);
    header("location: Schedule.php");
}
?>