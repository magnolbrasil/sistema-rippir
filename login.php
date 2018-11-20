<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $connect = mysql_connect('localhost','root','M@rinh@02');
  $db = mysql_select_db('mysystem');
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM player WHERE login = '$login' AND senha = '$senha'");
        if (mysql_num_rows($verifica)<=0){
          echo"<script>window.location.href='index.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
?>