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
        <form action="" method="post" name="f_login" id="f_login">
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