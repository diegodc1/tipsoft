<?php

if (isset($_SESSION['user_name'])) {
  $userName = $_SESSION['user_name'];
}

?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/header.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="/assets/logo-grande.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="/script.js"></script>

</head>

<nav class="header navbar navbar-expand-lg">

  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="assets/logo.png" alt="Logo tipsoft"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
        <div class="links">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="sobre.php">Sobre nós</a>
          </li>
        </div>
        <div class="dropdown">
          <button class="btn btn-profile btn-secondary dropdown-toggle btn-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user i-user"></i><label class="user"><?php echo $userName ?></label>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <a href="profile.php" id="myAccount">
              <li><button class="dropdown-item content-drop-center" style="text-align: center;" type="button">Minha Conta</button></li>
            </a>
            <a href="logout.php" id="Logout">
              <li><button class="dropdown-item content-drop-center" type="button"><i class="fa-solid fa-right-from-bracket i-logout"></i></button></li>
            </a>
          </ul>
        </div>
    </div>
    </ul>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>