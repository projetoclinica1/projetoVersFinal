<?php 
$nome = $_POST['nome'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('usuariosT','nome','senha');
$db = mysql_select_db('loginB');
  if (isset($entrar)) {
           
    $verifica = mysql_query("SELECT * FROM usuarios WHERE login = 
    '$nome' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('nome e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("nome",$nome);
        header("Location:index3.php");
      }
  }
  ?>