<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de convidados</title>
</head>
<body>
    <h2>Adicionar Convidados</h2>
    <form method="POST">
        Nome: <input type="text" name="nome" required>
        <button type="submit">Adicionar</button>
    </form>
   <?php 
session_start(); 
if(!isset($_SESSION['convidados'])){ 
$_SESSION['convidadoss'] = array(); 
} 
if (isset($_POST['nome']) && $_POST['nome'] != ""){ 
    $nome = 
    htmlspecialchars($_POST['nome']);
    $_SESSION['convidados'][]= $nome;
} 
?> 
<h3>Lista atual de convidados: </h3>
<ul>
    <?php
   foreach($_SESSION['convidados'] as $convidados) 
    echo "<li> $convidados</li>";{

    }
    ?>
    </ul>

</body>
</html>