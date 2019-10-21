<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
    <!--Css Externo-->
    <link rel="stylesheet" href="css/estilo.css">


    <title>Clinica</title>
  </head>
  <body>    
<!----Area de login--->
<section class="container ajusteL ">
<div class="container-fluid d-flex justify-content-center">
<div class="row">
<div class="jumbotron">
    <div class="row p-2 text-black">
    <fieldset>
            
    <form action="Login.php" method="post">
  
  <legend>Dados de Login</legend>
  <form method="POST" action="cadastros.php">
<label>Nome:</label><input type="text" name="nome" id="nome-"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
<a href="cadastro.html">Cadastre-se</a>

            </form>
         </fieldset>
    </div>
</div>
</div>
</div>
</section>












<!--final bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>