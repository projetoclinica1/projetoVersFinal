<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Css Externo-->
    <link rel="stylesheet" href="css/estilos2.css">


    <title>Clinica</title>
  </head>
  <body>
<section class="container">  
  <?php require_once "navbar.php"; ?>
<!-- Slider-->
<section class="">
  <div class="bd-example ">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/teste.png" class="d-block w-100" alt="...">
          
        </div>
        <div class="carousel-item">
        <img src="img/teste.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
        <img src="img/teste.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<!--final Slide -->

<!-- equipe-->
<section class=" container orgSlide fundoF">
  <div class="card-deck">
    <div class="card" >
      <img src="imgC/dr.png" class="card-img-top ajusteA" alt="...">
      <div class="card-body">
        <h5 class="card-title">Clinico Geral</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        
      </div>
    </div>
    <div class="card">
      <img src="imgC/diretor.png" class="card-img-top ajusteA" alt="...">
      <div class="card-body">
        <h5 class="card-title">Diretor da Rede</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
    <div class="card">
      <img src="imgC/recep.png" class="card-img-top ajusteA" alt="...">
      <div class="card-body">
        <h5 class="card-title">Recepcionista</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        
      </div>
    </div>
  </div>

<!--final do time-->


<!--planos-->
<section class="orgSlide">
  <div id="carouselExampleInterval" class="carousel slide orgSlideB " data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <img src="imgC/planos.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="imgC/planos.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imgC/planos.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<!--final Planos-->

<!--Comentários-->
<section class="container orgSlideB ajusteQ">
  <div class="card-group">
    <div class="card arredondar">
      <img src="imgC/Pessoas/pessoa3.png" class="img-top ajusteC" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      
    </div>
    <div class="card">
    <img src="imgC/Pessoas/pessoa3.png" class="img-top ajusteC" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
    <div class="card arredondar">
    <img src="imgC/Pessoas/pessoa3.png" class="img-top ajusteC" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>     
    </div>
  </div>
</section>
<!--Final Comentários-->

<!-- footer-->
  <footer class="rodaP">
    <div class="row">
      <div class="col-xs-12">
        <strong>Nome do Site</strong><br>
        Criação Caseira<br>
        Tel.:976977293 <i class="fa fa-phone fa-x1"></i> <br>
        
        E-mail:Nomedosite@gmail.com <i class="fa fa-envelope fa-x1"></i>
      </div>
    </div>
  </footer>
<!--Final footer-->




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>