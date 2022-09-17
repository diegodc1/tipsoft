<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <title>Cadastro</title>
  <link rel="stylesheet" href="styles/cadastro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php
require_once('config.php');
require_once('mysql.php');

// Abre o BD
openBD();

// prepare and bind
$stmt = $conn->prepare("INSERT INTO usuarios (id, user, email, senha) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $newUserId, $newUser, $newUserEmail, $newUserPassword);


if (isset($_POST['newUserName']) && isset($_POST['newUserPassword'])) {
  $usuario = $_POST['newUserName'];

  // Faz a busca do usuário no BD.
  $result_usuario = "SELECT * FROM usuarios WHERE user = '$usuario' LIMIT 1";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
  $resultado = mysqli_fetch_assoc($resultado_usuario);
}


// Verifica se já existe um usuário com esse nome no BD..
if (isset($_POST['newUserName']) && isset($_POST['newUserPassword'])) {
  if (isset($resultado)) {
    echo "<style> .aviso2 {display: flex}</style>";
    echo "<style> .input-name {border: 2px solid red}</style>";
    echo "<style> .input-password {border: 2px solid red}</style>";
    echo "<style> .input-repeatPassword {border: 2px solid red}</style>";
    echo "<style> .input-email {border: 2px solid red}</style>";
  } else if ($_POST['newUserPassword'] != $_POST['newUserRepeatPassword']) {
    echo "<style> .aviso3 {display: flex}</style>";
    echo "<style> .input-repeatPassword {border: 2px solid red}</style>";
    echo "<style> .input-password {border: 2px solid red}</style>";
  } else {
    $newUser = $_POST['newUserName'];
    $newUserPassword = md5($_POST['newUserPassword']);
    $newUserEmail = $_POST['newUserEmail'];
    $stmt->execute();
    $_SESSION['aviso'] = true;

    header('Location: index.php');
  }
}

// Fecha o BD
closeBD($conn, $stmt);
?>


<body>
  <main>
    <div class="box1">
      <img src="assets/logo-fd-escuro.png" alt="">
      <h1>Já possui cadastro?</h1>
      <a href="index.php">Fazer login</a>
    </div>


    <div class="box2">

      <h1>Criar conta</h1>
      <form action="cadastro.php" method="POST">

        <div class="input-name">
          <i class="fa-solid fa-user"></i>
          <input type="text" maxlength="12" name="newUserName" placeholder="Usuário">
        </div>

        <div class="input-email">
          <i class="fa-solid fa-envelope"></i>
          <input type="email" name="newUserEmail" placeholder="Email">
        </div>

        <div class="input-password">
          <i class="fa-solid fa-lock"></i>
          <input type="password" name="newUserPassword" placeholder="Senha">
        </div>

        <div class="input-repeatPassword">
          <i class="fa-solid fa-lock"></i>
          <input type="password" name="newUserRepeatPassword" placeholder="Confirme sua senha">
        </div>

        <p class="aviso2">Usuário já cadastrado!</p>
        <p class="aviso3">As senhas informadas não são iguais!</p>

        <input type="submit" value="Cadastrar" class="submit-button">

      </form>
    </div>
  </main>

</body>

</html>