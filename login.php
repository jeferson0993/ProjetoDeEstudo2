<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projeto Site Completo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />    
</head>
<body>
    <header>
       <?php
            include "topo.php";
       ?> 
    </header>    

    <section id="main">
        
        <?php

            include "conexao.inc";
            
            if (isset($_POST["f_logar"])) {
                $user=$_POST["f_user"];
                $senha=$_POST["f_senha"];

                $sql = 'SELECT * FROM login WHERE login="$user" AND senha="$senha";';
                $res = mysqli_query($con, $sql);
                //$ret = mysqli_affected_rows($con);

                if ($res == 0) {
                    echo "<p>" + $res + "</p>";
                } else {
                    $chave1 = "qwertyuiopasdfghjklzxcvbnm";
                    $chave2 = "QWERTYUIOPASDFGHJKLZXCVBNM";
                    $chave3 = "1234567890";
                    $chave = str_shuffle($chave1.$chave2.$chave3);
                    $tam = strlen($chave);
                    $num = "";
                    $qtde = rand(20, 50);
                    for ($i = 0; $i < $qtde; $i++) { 
                        $pos = rand(0, $tam);
                        $num .= substr($chave, $pos, 1);
                    }
                    session_start();
                    $_SESSION['numlogin'] = $num;
                    $_SESSION['username'] = $user;
                    header("Location:gerenciamento.php?num=$num");
                }
            }

            mysqli_close($con);
        ?>

        <form action="login.php" method="post" name="f_login" id="f_login">
            <label for="">Usuário</label>
            <input type="text" name="f_user" id="">
            <label for="">Senha</label>
            <input type="password" name="f_senha" id="">
            <input type="submit" value="LOGAR" name="f_logar" class="botao_menu">
        </form>
    </section>
</body>
<script src="main.js"></script>
</html>