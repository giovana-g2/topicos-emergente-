<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETORES</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class ="titulo">VETORES</h1>
</body>
<?php


$v1 = range(0, 12);
foreach($v1 as $valor){
    echo $valor . "<br>";
}
echo "<hr>";


$v2 = range(0,100,10);
foreach($v2 as $valor){
    echo $valor . "<br>";
    
}
echo "<hr>";


$v3 = range("a","i");
foreach($v3 as $valor){
    echo $valor . "<br>";
}
echo "<hr>";

$v4 = range("e","a");
foreach($v4 as $valor){
    echo $valor . "<br>";
}
echo "<hr>";
?>
</html>