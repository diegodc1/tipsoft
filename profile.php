<?php
session_start();
if (isset($_SESSION['user_logado'])) {
    if (!$_SESSION['user_logado']) {
        header('Location: /index.php');
    }
} else {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Perfil do Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/styles/profile.css">
</head>

<body>
    <?php require "./components/header.php" ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 pb-5">
                <!-- Account Sidebar-->
                <div class="author-card pb-3">
                    <div class="author-card-cover" style="background-image: url(https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg);"></div>
                    <div class="author-card-profile">
                        <div class="author-card-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Daniel Adams">
                        </div>
                        <div class="author-card-details">
                            <h5 class="author-card-name text-lg">@pedroAlvaresCabral</h5><span class="author-card-position">Entrou em Fev - 2017</span>
                        </div>
                    </div>
                </div>
                <div class="wizard">
                    <nav class="list-group list-group-flush">
                        <label class="list-group-item">Configurações de Perfil</label>

                    </nav>
                </div>
            </div>
            <!-- Profile Settings-->
            <div class="col-lg-8 pb-5">
                <form class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Nome</label>
                            <input class="form-control" type="text" id="account-fn" value="Pedro Alvares Cabral" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-ln">Usuário</label>
                            <input class="form-control" type="text" id="account-ln" value="@pedroAlvaresCabral" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">E-mail</label>
                            <input class="form-control" type="email" id="account-email" value="alvares_cabral@example.com" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-phone">Telefone</label>
                            <input class="form-control" type="text" id="account-phone" value="(41) 997017892" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-pass">Nova Senha</label>
                            <input class="form-control" type="password" id="account-pass">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">Confirmar nova senha</label>
                            <input class="form-control" type="password" id="account-confirm-pass">
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <button class="btn btn-style-1 btn-primary" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Atualizar Perfil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>





    <br>
    <script type="text/javascript">
    </script>
</body>
<?php require "./components/footer.php" ?>

</html>