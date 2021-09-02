<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "css-padrao.php" ?>
    <title>Cadastro</title>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Cadastrar</b></a>
            </div>
            <div class="card-body">
                <?php include_once "alert.php"; ?>
                <form method="post" name="frmcadastro" id="frmcadastro">
                    <div class="input-group mb-3">
                        <input required autofocus name="edtnome" id="edtnome" type="text" class="form-control" placeholder="Digite seu nome completo*">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="edtemail" id="edtemail" type="email" class="form-control" placeholder="Digite seu endereço de e-mail*">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="edtsenha" id="edtsenha" type="password" class="form-control" placeholder="Digite sua senha*">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input name="edttermos" name="edttermos" type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    Estou de acordo com todas as condições,
                                    <a href="#" data-toggle="modal" data-target="#exampleModalLong">
                                        Leia os termos
                                    </a>
                                </label>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Termos de Uso</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Este site pertence e é operado por [<a href="https://github.com/Eduardo-S4ntos">Eduardo Oliveira</a>] Estes Termos estabelecem os termos e condições sob os quais você pode utilizar nosso site e serviços oferecidos por nós. Este site oferece aos visitantes [descrição do que é oferecido em seu site]. Ao acessar ou usar o website do nosso serviço, você aprova que leu, entendeu e concorda em ficar vinculado a estes Termos.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="social-auth-links text-center">
                        <button name="bntsalvar" id="bntsalvar" type="submit" class="btn btn-block btn-primary">
                            <i class="fas fa-plus mr-2"></i>
                            Salvar
                        </button>
                    </div>
                </form>
                <div class="social-auth-links text-center">
                    <a href="login.php" type="button" class="btn btn-block btn-danger">
                        <i class="fas fa-ban"></i>
                        Cancelar
                    </a>
                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- Valida os dados do forulário e caso seja valido salva os dado no banco de dados -->
    <?php include_once "js-padrao.php" ?>
    <script src="js/cadastro.js"></script>
</body>

</html>