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
$rg = $_POST['rg'];
$nasc = $_POST['nasc'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$placa = $_POST['placa'];
$funcao = $_POST['funcao'];
$senha = $_POST['senha'];
$connect = mysqli_connect('localhost:3307','root','');
$db = mysqli_select_db($connect, 'grupo2');
$query_select = "SELECT cpf FROM funcionario WHERE cpf = '$cpf'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['cpf'];
 
  if($cpf == "" || $cpf == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo cadastro deve ser preenchido');window.location.href='CadastroFuncionario.html';</script>";
 
    }else{
      if($logarray == $cpf){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse funcionario já existe');window.location.href='CadastroFuncionario.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO funcionario (nome, cpf, rg, nasc, sexo, telefone, celular, email, rua, bairro, numero, complemento, cep, estado, cidade, placa, funcao, senha) VALUES ('$nome', '$cpf', '$rg', '$nasc', '$sexo', '$telefone', '$celular', '$email', '$rua', '$bairro', '$numero', '$complemento', '$cep', '$estado', '$cidade', '$placa', '$funcao', '$senha')";
        $insert = mysqli_query($connect, $query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Funcionario cadastrado com sucesso!');window.location.href='funcionario.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse funcionario');window.location.href='CadastroFuncionario.html'</script>";
        }
      }
    }
?>
    </body>
</html>
