<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e3b58b8a21.js" crossorigin="anonymous"></script>
    <!--Css Externo-->
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Clinica</title>
  </head>
  <body>


  <?php require_once "../navbarO.php"; ?>

        <div class="container">
        <table class="table">
        <thead class="">
        <tr class="table-primary">
            <th scope="col">Informações dos Pacientes</th>
         
       
  
        <?php           



$conexao = new PDO("mysql:dbname=db_IntegradorCurso;host=localhost","root","");
$stmt = $conexao->prepare("SELECT * FROM tb_Consulta ORDER BY Nome");
$stmt ->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $rows) {
     foreach ($rows as $key => $value) {
        echo "<strong>" . $key . ":</strong>" . $value . "<br/>";       
    }
    echo "==============================<br>";


}


?> 
</tr>
 </thead>
  </tbody>
</table>
</div>  
</body>
</html>