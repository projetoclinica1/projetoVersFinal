
<?php


     // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
     if (!empty($_POST) AND (empty($_POST['nome']) OR empty($_POST['senha']))) {
    header("Location: index2.php"); exit;
}
    
    
  // Tenta se conectar ao servidor MySQL
  mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  mysql_select_db('loginN') or trigger_error(mysql_error());
    
  $nome = mysql_real_escape_string($_POST['nome']);
  $senha = mysql_real_escape_string($_POST['senha']);