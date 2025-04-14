<html>

<body>

    <form action="form.php" method="post">

        Digite seu nome:
        <input type="text" size="80" name="txtnome">
        <input type="submit" name="enviar" value="Vai!">
        <input type="submit" name="retirar" value="Remove">

    </form>

    <?php
    session_start();
    if (!isset($_SESSION['conv'])) {
        $_SESSION['conv'] = [];
    }
    if (isset($_POST["enviar"])) {
        $nome = $_POST["txtnome"];

        array_push($_SESSION['conv'], $nome);

        foreach ($_SESSION['conv'] as $i => $v) {
            echo "($i) - $v <br>";
        }
    }
    if (isset($_POST['retirar'])) {
        array_pop($_SESSION['conv']);

        foreach ($_SESSION['conv'] as $i => $v) {
            echo "($i) - $v <br>";
        }
    }


    ?>

</body>


</html>