<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=width=device-width, initial-scale=1.0">
    <!-- include do estilo -->
    <?php include_once "css-padrao.php"; ?>
    <title>Home</title>
</head>
<!-- corpo da pagina -->

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar- barra de navegação -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">TurmaADS</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- navbar links a esquerda -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!-- navbar link tela de inicio -->
                            <a href="index.php" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item">
                            <!-- navbar link tela sobre -->
                            <a href="#" class="nav-link">QUEM SOMOS</a>
                        </li>

                        <li class="nav-item">
                            <!-- navbar link tela de contato -->
                            <a href="#" class="nav-link">CONTATO</a>
                        </li>
                        <li class="nav-item">
                            <!-- navbar link tela de login -->
                            <a class="btn bg-success" href="login.php">
                                <i class="fas fa-sign-in-alt"></i> Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar - fechamento -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Footer - rodapé do site -->
        <footer class="main-footer">
            <!-- Para a direita -->
            <div class="float-right d-none d-sm-inline">
            </div>
            <strong>Copyright &copy; 2021 <a href="">Eduardo Oliveira</a>.</strong> All rights reserved.
        </footer>
    </div>
    <?php include_once "js-padrao.php"; ?>
</body>

</html>