
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETORES</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titulo">VETORES</h1>
   
    
</body>
<?php

$v1 = array('Ferrari', 'McLaren', 'RedBull', 'BMW', 'BAR');
foreach($v1 as $chave => $valor){
    echo "chave: $chave - valor: $valor<br>";
}
echo "<hr>";


$v2 = array('a'=>8, 'b'=>9, 'd'=>6, 'c'=>2, 'e'=>5);

foreach ($v2 as $chave => $valor){
    echo "chave: $chave - valor: $valor <br>";
}

echo"<hr>";

$v3 = array('rg' => '00.000.00- -X', 'cpf' => '000.000.000--00', 'cartão de crédito' => 12345);
foreach ($v3 as $chave => $valor){
    echo "chave: $chave - valor: $valor <br>";
}
echo "<hr>";
$chamada = array( 'aluno 1' => 'alberto', 'aluno 3'=> 'bianca', 'aluno 5' => 'carlos', 'aluno 24' => 'maria');
foreach($chamada as $chave => $valor){
    echo "chave: $chave - valor: $valor<br>";
}



?>
</html>
