<?php
include('conexao.php');
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql = "SELECT * FROM contatos WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) == 1){
        $contato = mysqli_fetch_assoc($resultado);
    } else{
        echo "Contato nao foi encontrado";
        exit;
    }
}

if(isset($_POST['atualizar'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql2 = "UPDATE contatos SET nome ='$nome', endereco ='$endereco', telefone = '$telefone' WHERE id= $id";
    
    if (mysqli_query($conexao, $sql2)){
        echo "Contato atualizado com sucesso!";
        echo"<br> <a href='index.php'>Voltar</a>";
        exit;

    }else{
        echo"Erro ao atualizar." . mysqli_error($conexao);
    }

}

?>

    <form method="post">

    Nome: <input type="text" name="nome" value="<?php echo $contato['nome']?>">
    <br><br>
    Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco']?>">
    <br><br>
    Telefone: <input type="text" name="telefone" value="<?php echo$contato['telefone']?>">
    <br><br>
    <input type="submit" name= atualizar value="Atualizar">
    </form>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        h2 {
            color: #007BFF;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            width: 100%;
            max-width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 14px;
            margin-bottom: 8px;
            display: inline-block;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        .back-link a {
            color: #007BFF;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>