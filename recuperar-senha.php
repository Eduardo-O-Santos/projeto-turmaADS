<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- include biblioteca de estilo -->
    <?php include_once "css-padrao.php"; ?>
    <title>Recuperar Senha</title>
</head>
<!-- corpo da pagina -->

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <!-- titulo e link da tela recuperar senha -->
                <a href="recuperar-senha.php" class="h1"><b>Recuperar Senha</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Preencha todos os campos abaixo para recuperar sua senha!</p>
                <!-- formulario para recuperação de senha -->
                <form action="login.html" method="post">
                    <div class="input-group mb-3">
                        <!-- caixa de input do tipo senha -->
                        <input required autofocus type="password" class="form-control" placeholder="Nova senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <!-- caixa de input do tipo senha -->
                        <input required autofocus type="password" class="form-control" placeholder="Confirma senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- botão recuperar senha -->
                            <button type="submit" class="btn btn-primary btn-block">Recuperar</button>
                        </div>
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <!-- link volta para tela de login -->
                    <a href="login.php">Login</a>
                </p>
            </div>
        </div>
    </div>
    <!-- include biblioteca js -->
    <?php include_once "js-padrao.php"; ?>
</body>

</html>