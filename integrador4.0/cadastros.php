<?php 
$nome = $_POST['usuariosT'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('usuariosT','nome','senha');
$db = mysql_select_db('loginB');
$query_select = "SELECT login FROM usuarios WHERE login = '$nome'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['nome'];
 
  if($nome == "" || $nome == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo nome deve ser preenchido');window.location.href='
    index2.html';</script>";
 
    }else{
      if($logarray == $nome){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse nome já existe');window.location.href='
        index2.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$nome','$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
?>