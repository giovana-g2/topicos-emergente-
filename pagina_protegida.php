<html>
    <body>
        <?php
        $_usuarioc = "Giovana-g2";
        $_senhac = "87654321"; 
        $_usuario = $_POST["usu"];
        $_senha = $_POST["sen"];

        if ($_usuarioc == $_usuario && $_senhac == $_senha){
            echo "Seja bem-vindo(a)\n <br>" ;
            
            echo "Você está online no servidor da empresa\n<br>";

            echo "Seu cargo é: Engenheiro(a) de software\n<br>";
        }else{
            echo "Usuario ou senha incorreto, Tente novamente\n<br>";

        }
        ?>
        <form action="ex2.php" >
            <input type="submit" value="Voltar">
        </form>
    </body>
</html>