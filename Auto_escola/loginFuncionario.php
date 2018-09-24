<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php 
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $connect = mysqli_connect('localhost:3307','root','');
  $db = mysqli_select_db($connect, 'grupo2');
    if (isset($entrar)) {
             
      $verifica = mysqli_query($connect, "SELECT * FROM funcionario WHERE nome = '$nome' AND cpf = '$cpf' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='loginFuncionario.html';</script>";
          die();
        }else{
          setcookie("nome",$nome);
          header("Location:funcionario.php");
        }
    }
?>
</body>
</html>
