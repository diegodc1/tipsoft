<?php
session_start();
// Verifica se o usuário já está logado
if (isset($_SESSION['user_logado'])) {
  if (!$_SESSION['user_logado']) {
    header('Location: index.php');
  }
} else {
  header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="styles/home.css">
  <link rel="stylesheet" href="styles/timeline.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>


<body>
  <?php require "./components/header.php";
  ?>
  <div class="container">
    <div class="col-lg-8">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Feed Recente</h3>
        </div>
        <div class="panel-content panel-activity">
          <form action="#" class="panel-activity__status">
            <textarea name="user_activity" placeholder="Compartilhe suas dicas com a nossa comunidade..." class="form-control"></textarea>
            <div class="actions">
              <div class="btn-group">
                <button type="button" class="btn-link" title="" data-toggle="tooltip" data-original-title="Post an Image">
                  <i class="fa fa-image"></i>
                </button>
                <button type="button" class="btn-link" title="" data-toggle="tooltip" data-original-title="Post an Video">
                  <i class="fa fa-video-camera"></i>
                </button>
                <button type="button" class="btn-link" title="" data-toggle="tooltip" data-original-title="Post an Idea">
                  <i class="fa fa-lightbulb-o"></i>
                </button>
                <button type="button" class="btn-link" title="" data-toggle="tooltip" data-original-title="Post an Question">
                  <i class="fa fa-question-circle-o"></i>
                </button>
              </div>
              <button type="submit" class="btn btn-sm btn-rounded btn-info">
                Publicar
              </button>
            </div>
          </form>
          <ul class="panel-activity__list">

            <!-- POST 1 -->
            <li>
              <i class="activity__list__icon fa fa-question-circle-o"></i>
              <div class="activity__list__header">
                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                <a href="#">@ferFerdidando</a> Postou essa dica: <a href="#" class="post-title">Extensão no VSCode</a>. Categoria: <a href="#">Programação</a>
              </div>
              <div class="activity__list__body entry-content">
                <img class="img-post" src="assets/post_rocketseat.png" alt="">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam consectetur, nemo earum, ipsa ducimus quidem. ipsum dolor sit amet consectetur adipisicing elit. Aliquam consectetur, nemo earum, ipsa ducimus quidem.
                </p>
              </div>
              <div class="activity__list__footer">
                <a href="#"> <i class="fa fa-thumbs-up"></i>123</a>
                <a href="#"> <i class="fa fa-comments"></i>23</a>
                <span> <i class="fa fa-clock"></i>2 horas atrás</span>
              </div>
            </li>


            <!-- POST 2 -->
            <li>
              <i class="activity__list__icon fa fa-question-circle-o"></i>
              <div class="activity__list__header">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                <a href="#">@juninhoPlay</a> Postou essa dica: <a href="#" class="post-title">Copie e cole no local exato que você deseja</a> . Categoria: <a href="#">Photoshop</a>
              </div>
              <div class="activity__list__body entry-content">
                <p>
                  <img src="" alt="">
                  Caso o usuário deseje manter algo copiado de uma imagem para a outra, basta pressionar a tecla “Shift” quando for fazer o famoso “Ctrl + C e Ctrl + V”. E dessa forma, o conteúdo será colado exatamente no destino na posição em que estava de onde foi copiado.
                </p>
              </div>
              <div class="activity__list__footer">
                <a href="#"> <i class="fa fa-thumbs-up"></i>123</a>
                <a href="#"> <i class="fa fa-comments"></i>23</a>
                <span> <i class="fa fa-clock"></i>2 hours ago</span>
              </div>
            </li>

            <!-- POST 3 -->
            <i class="activity__list__icon fa fa-question-circle-o"></i>
            <div class="activity__list__header">
              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
              <a href="#">@mariaJulieta</a> Postou essa dica: <a href="#" class="post-title">Comandos SQL</a>. Categoria: <a href="#">Programação</a>
            </div>
            <div class="activity__list__body entry-content">
              <img class="img-post" src="assets/post_rocketseat2.png" alt="">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam consectetur, nemo earum, ipsa ducimus quidem. ipsum dolor sit amet consectetur adipisicing elit. Aliquam consectetur, nemo earum, ipsa ducimus quidem.
              </p>
            </div>
            <div class="activity__list__footer">
              <a href="#"> <i class="fa fa-thumbs-up"></i>123</a>
              <a href="#"> <i class="fa fa-comments"></i>23</a>
              <span> <i class="fa fa-clock"></i>2 horas atrás</span>
            </div>
            </li>


          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php require "./components/footer.php" ?>


</body>

</html>