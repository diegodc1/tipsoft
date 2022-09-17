<?php
// Verifica se o usuário está logado
session_start();
if (isset($_SESSION['user_logado'])) {
    if (!$_SESSION['user_logado']) {
        header('Location: /index.php');
    }
} else {
    header('Location: index.php');
}

// Pega as informações do usuário
if (isset($_SESSION['user_name']) && isset($_SESSION['user_email']) && isset($_SESSION['user_id'])) {
    $userName = $_SESSION['user_name'];
    $userEmail = $_SESSION['user_email'];
    $userId = $_SESSION['user_id'];
}


// Bando de dados
require 'config.php';
require_once('mysql.php');

openBD();

// UPDATE `usuarios` SET `id`='[value-1]',`user`='[value-2]',`email`='[value-3]',`senha`='[value-4]' WHERE 1

$stmt = $conn->prepare("UPDATE `usuarios` SET `senha` = (?), `user` = (?) WHERE id = '$userId' ");
$stmt->bind_param("ss", $newPassword, $newUserName);


if (isset($_POST['changeUserPassword']) && isset($_POST['confirmChangeUserPassword']) && isset($_POST['changeUser'])) {
    if (($_POST['changeUserPassword'] == $_POST['confirmChangeUserPassword']) && $_POST['changeUserPassword'] != '' or $_POST['confirmChangeUserPassword'] != '' or $_POST['changeUser'] != '') {
        $newPassword = md5($_POST['changeUserPassword']);
        $newUserName = $_POST['changeUser'];
        $_SESSION['user_name'] = $newUserName;
        $stmt->execute();
    } else {
        echo "<style> .aviso4 {display: flex}</style>";
    }
}

closeBD($conn, $stmt);

?>



<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <title>Perfil do Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles/profile.css">
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
                            <h5 class="author-card-name text-lg"><?php echo $userName ?></h5><span class="author-card-position">Entrou em Fev - 2017</span>
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
                <form class="row" method="POST" action="profile.php">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-ln">Usuário</label>
                            <input class="form-control" type="text" id="changeUser" name="changeUser" value="<?php echo $userName ?>" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">E-mail</label>
                            <input class="form-control" type="email" id="account-email" value="<?php echo $userEmail ?>" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-pass">Nova Senha</label>
                            <input class="form-control" type="password" id="changeUserPassword" name="changeUserPassword">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">Confirmar nova senha</label>
                            <input class="form-control" type="password" id="confirmChangeUserPassword" name="confirmChangeUserPassword">
                        </div>
                    </div>
                    <p class="aviso4">As senhas não são iguais!</p>
                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <button class="btn btn-style-1 btn-primary" type="submit" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Atualizar Perfil</button>
                        </div>
                        <a href="#exampleModalCenter ">
                            <p class="delete-button btn" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                Excluir conta
                            </p>
                        </a>
                    </div>
                </form>


                <!-- Inicio modal -->
                <div class="modal fade" tabindex="-1" id="deleteModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Excluir Conta</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h4>Deseja mesmo excluir sua conta?</h4>
                                <p>Após a confirmação, não será possível reverter essa decisão!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <a href="delete.php" class="btn delete-button">Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim modal -->




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