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
<html>

<head>
  <title>Sobre nós</title>
  <link rel="stylesheet" href="styles/sobre.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php require "./components/header.php" ?>
  </div>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="assets/logo-bk.png" class="d-block"></img>
        <div class="carousel-caption d-none d-md-block">

          <a href="#origem"><button type="button" class="btn btn-outline-primary">Origem</button></a>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="assets/logo-carrousel.png" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">

          <a href="#objetivo"><button type="button" class="btn btn-outline-primary">Objetivo</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/carrousel4.png" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">

          <a href="#missao"><button type="button" class="btn btn-outline-primary">Missão</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/carrousel-2.png" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">

          <a href="#valores"><button type="button" class="btn btn-outline-primary">Valores</button></a>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
  </div>

  <div class="divider-2"></div>

  <!-- CARD 1 -->
  <div class="box-card left-card" id="origem">
    <div id="sobre_nos">
      <div class="card_01 card-right card-br">
        <div class="box-user">
          <p><img src="assets/perfil.png" alt=""><span class="ahoba">@diego_alves</span></p>
          <div class="cargo_di">CTO</div>
        </div>
        <br> <span class="aspas"><i class="fa-solid fa-quote-left"></i></span>Surgiu com a dificuldade de nós programadores, descobrir novas funcionalidades e dicas sobre programação.
      </div>
    </div>

    <div class="text-box text1">
      <h1>ORIGEM DA EMPRESA</h1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur totam sit odio dicta veritatis perferendis, quod modi accusantium aliquid, minus ipsum ut earum nobis, ab nihil tempora? Itaque, ut aliquam?
      </p>
    </div>
  </div>

  <div class="divider-1"></div>

  <!-- CARD 2 -->
  <div class="box-card right-card" id="objetivo">
    <div class="text-box">
      <H1>OBJETIVO</H1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur totam sit odio dicta veritatis perferendis, quod modi accusantium aliquid, minus ipsum ut earum nobis, ab nihil tempora? Itaque, ut aliquam?
      </p>
    </div>

    <div id="sobre_nos" class="box-1">
      <div class="card_01">
        <div class="box-user">
          <p><img src="assets/perfil.png" alt=""><span class="ahoba">@Kauan_zaziscki</span></p>
          <div class="cargo_di">Dir. Desenvolvimento</div>
        </div>
        <br> <span class="aspas"><i class="fa-solid fa-quote-left"></i></span>Criado para auxiliar o crescimento do Mundo dos Softwares de uma maneira descontraída.
      </div>
    </div>

  </div>

  <div class="divider-2"></div>


  <!-- CARD 3 -->
  <div class="box-card left-card" id="missao">
    <div id="sobre_nos">
      <div class="card_01 card-br ">
        <div class="box-user">
          <p><img src="assets/perfil.png" alt=""><span class="ahoba">@Lucas_Siqueira</span></p>
          <div class="cargo_di">CEO</div>
        </div>
        <br><span class="aspas"><i class="fa-solid fa-quote-left"></i></span>Nossa missão é fazer do mundo Software um lugar mais acessivel para todos.
      </div>
    </div>

    <div class="text-box text1">
      <h1>MISSÃO</h1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur totam sit odio dicta veritatis perferendis, quod modi accusantium aliquid, minus ipsum ut earum nobis, ab nihil tempora? Itaque, ut aliquam?
      </p>
    </div>
  </div>

  <div class="divider-1"></div>


  <!-- CARD 4 -->
  <div class="box-card right-card" id="valores">
    <div class="text-box">
      <h1>VALORES</h1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur totam sit odio dicta veritatis perferendis, quod modi accusantium aliquid, minus ipsum ut earum nobis, ab nihil tempora? Itaque, ut aliquam?
      </p>
    </div>

    <div id="sobre_nos">
      <div class="card_01 card-right">
        <div class="box-user">
          <p><img src="assets/perfil.png" alt=""><span class="ahoba">@Luis_Kryzozun</span></p>
          <div class="cargo_di">Co-founder</div>
        </div>
        <br> <span class="aspas"><i class="fa-solid fa-quote-left"></i></span>Somos umas empresa que preza pelo valor de ensinar e aprender.
      </div>
    </div>


  </div>


  </div>



  <footer><?php require "./components/footer.php" ?></footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>