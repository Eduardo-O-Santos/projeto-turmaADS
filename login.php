<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php include_once "css-padrao.php" ?>
    <title>Autenticação</title>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b>Login</b></a>
            </div>
            <div class="card-body">
                <?php include_once "alert.php"; ?>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Celular ou E-mail*">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Digite sua senha*">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fas fa-sign-in-alt"></i>
                                Login
                            </button>
                        </div>
                    </div>
                </form>
                <div class="row">
                <p class="mt-2 mb-2 col-12">
                    <!--target="_blank"-->
                    <a href="register.php" class="btn btn-success col-12">Ainda não tenho conta</a>
                </p>
                </div>
                <p class="mt-0">
                    <a href="recuperar-senha.php" class="text-center">Esqueci a senha!</a>
                </p>
            </div>
        </div>
    </div>
    <?php include_once "js-padrao.php"; ?>
</body>

</html>