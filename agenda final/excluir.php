<?php
include ('conexao.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contatos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
   
    if(mysqli_num_rows($resultado) == 1) {
        $contato = mysqli_fetch_assoc($resultado);
    } else {
        echo "O contato não foi encontrado.";
        exit;
    }
}

if(isset($_POST['Excluir'])) {
    $id = $_POST['id'];

    $sql2 = "DELETE FROM contatos WHERE id = $id";

    if (mysqli_query($conexao, $sql2)) {
        echo "Contato excluído com sucesso!";
        echo "<br><a href='index.php'>Voltar</a>";
        exit;
    } else {
        echo "Erro ao excluir: " . mysqli_error($conexao);
    }
}
?>
<html>
<body>
    <h2>Excluindo Contato</h2>
    <p>Tem certeza de que deseja excluir o contato? <strong><?php echo "<br>Nome: ".$contato['nome']."<br> Endereço: ", $contato['endereco']."<br> Telefone: ", $contato['telefone']. "<br>"; ?></strong></p>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
        <input type="submit" name="Excluir" value="Excluir">
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>
<style> * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}
h2 {
    color: #333;
}
p {
    font-size: 16px;
    color: #555;
}
strong {
    color: #007BFF;
}
form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}
input[type="submit"] {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}
input[type="submit"]:hover {
    background-color: #007BFF;
}
a {
    text-decoration: none;
    color: #5bc0de; 
    margin-left: 10px;
}
a:hover {
    text-decoration: underline; 
}
</style>
