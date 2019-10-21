
<?php
    //Resgate das variveis
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    //Verifica se as variveis estão vazias
    if ($pega['nivel'] == 1) {
        header('Location: index.php');
    }
    else {
        header('Location: index3.php');
    }

    //Conexão com o banco de dados
    $connect = new PDO("myqsl:dbname=loginC;host=localhost", "root", "");
    $stmt = $connect->prepare("SELECT * FROM usuariosT WHERE nome = :NOME AND senha = :SENHA ");

    $stmt->bindParam(":NOME", $nome);
    $stmt->bindParam(":SENHA", $senha);

    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Verificar se a variavel resultado possui algum dado
    if (count($resultado) <=0 ){
        echo "Email ou senha invalidos!";
    }

    //Pegar o primeiro indice para estancia
    $pega = $resultado[0];

    //Iniciar a sessão
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $pega['id_login'];
    $_SESSION['user_name'] = $pega['nome'];

    //Verifica se o usuario é admin ou usuario é comun
    if ($pega['nivel'] == 1) {
        header('Location: index.php');
    }else {
        header('Location: index.php');
    }
