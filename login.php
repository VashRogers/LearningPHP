<?php
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($_POST['email']){
        $usuarios = [
            [
                "nome"=>"Maycon",
                "email"=>"maycon.antonio@gmail.com",
                "senha"=>"1011101"
            ],

            [
                "nome"=>"Rafael",
                "email"=>"rafael.melo@gmail.com",
                "senha"=>"1011101"
            ],
            [
                "nome"=>"Róger",
                "email"=>"rogerssj2@gmail.com",
                "senha"=>"1011101"
            ]
        ];

        foreach($usuarios as $usuario){
            $emailValido = $email === $usuario['email'];
            $senhaValida = $senha === $usuario['senha'];

            if($emailValido && $senhaValida){
                $_SESSION['erros'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                
                setcookie('usuario', $usuario['nome'], $exp);
                $exp = time() + 60 * 60 * 24 * 30;
                
                header('Location: index.php');   
            }

            if(!$_SESSION['usuario']) {
                $_SESSION['erros'] = ['Usuário/Senha Inválido'];
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class='login'>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Welcome</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique - se</h3>
            <?php if($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p> <?= $erro ?> </p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="POST">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">

                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>

            </form>
        </div>
    </main>
</body>
</html>