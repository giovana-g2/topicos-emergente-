<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
            padding: 20px;
        }

        h2 {
            text-align: center;
            color:rgb(76, 119, 175);
            margin-bottom: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
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
            background-color:rgb(76, 119, 175);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color:rgb(76, 119, 175);
        }

        .lista-contatos {
            margin-top: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .lista-contatos a {
            color:rgb(76, 119, 175);
            text-decoration: none;
        }

        .lista-contatos a:hover {
            text-decoration: underline;
        }

        .lista-contatos p {
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }

        .contato-item {
            margin-bottom: 12px;
        }
    </style>
<body>
   <h2>Cadastrar Contato</h2>

    <form method="post" action="salvar.php">

        Nome: <input type="text" name="nome" required><br><br>
        Endereço: <input type="text" name="endereco"><br><br>
        Telefone: <input type="text" name="telefone"><br><br>
        <input type="submit" value="Salvar">
    </form>

    <h2>Lista de Contatos</h2>
    <?php
    include('conexao.php');

    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo $linha['nome'] . " | " . $linha['endereco'] . " | " . $linha['telefone'] .
                " | <a href='editar.php?id=" . $linha["id"] . "'>Editar</a>" .
                " | <a href='excluir.php?id=" . $linha["id"] . "'>Excluir</a> <br>";
        }
    } else {
        echo "Nenhum contato encontrado.";
    }
    ?> 
</body>
</html>