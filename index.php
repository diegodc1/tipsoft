<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./styles/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php
session_start();

$correct_user = 'admin';
$correct_password = '123';

require 'config.php';
require_once('mysql.php');

openBD();


if (isset($_POST['userEmail']) && isset($_POST['userPassword'])) {
  $email = $_POST['userEmail'];
  $senha = md5($_POST['userPassword']);

  // Faz a busca do usuário no BD.
  $result_usuario = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha' LIMIT 1";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
  $resultado = mysqli_fetch_assoc($resultado_usuario);
}

// Verifica se o usuário já está logado
if (isset($_SESSION['user_logado'])) {
  if ($_SESSION['user_logado']) {
    header('Location: home.php');
  } else {
    header('Location: index.php');
  }
}


// Verifica se $resultado encontrou o usuario no BD.
if (isset($_POST['userEmail']) && isset($_POST['userPassword'])) {
  if (isset($resultado)) {
    header('Location: home.php');
    $_SESSION['user_logado'] =  true;
    $_SESSION['user_name'] = $resultado['user'];
  } else {
    $_SESSION['loginErro'] = "Usuário ou senha Inválido";
    echo "<style> .input-box-1 {border: 2px solid red}</style>";
    echo "<style> .input-box-2 {border: 2px solid red}</style>";
    echo "<style> .aviso {display: flex}</style>";
  }
}

$conn->close();


?>

<body>
  <main>

    <?php if ($_SESSION['aviso'] = true) {
      require 'modal.php';
    } ?>

    <div class="box1">
      <img src="assets/logo-fd-escuro.png" alt="">
      <h1>Não possui cadastro?</h1>
      <a href="cadastro.php">Cadastre-se</a>
    </div>

    <div class="box2">
      <h1>Login</h1>



      <form action="index.php" method="POST">
        <div class="input-box-1">
          <i class="fa-solid fa-envelope"></i>

          <input type="email" id="userEmail" name="userEmail" placeholder="Email">
        </div>

        <div class="input-box-2">
          <i class="fa-solid fa-lock"></i>
          <input type="password" id="userPassword" name="userPassword" placeholder="Senha">
        </div>

        <p class="aviso">Email ou senha incorreto!</p>


        <input type="submit" value="Entrar" class="submit-button">
      </form>




    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>