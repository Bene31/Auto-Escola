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
$tipo = $_POST['tipo'];
$connect = mysqli_connect('localhost:3307','root','');
$db = mysqli_select_db($connect, 'grupo2');
$query_select = "SELECT cpf FROM aluno WHERE cpf = '$cpf'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['cpf'];
 
  if($cpf == "" || $cpf == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo cadastro deve ser preenchido');window.location.href='CadastroAluno.html';</script>";
 
    }else{
      if($logarray == $cpf){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse aluno já existe');window.location.href='CadastroAluno.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO aluno (nome_aluno, cpf, rg, nasc, sexo, telefone, celular, email, rua, bairro, numero, complemento, cep, estado, cidade, tipo) VALUES ('$nome', '$cpf', '$rg', '$nasc', '$sexo', '$telefone', '$celular', '$email', '$rua', '$bairro', '$numero', '$complemento', '$cep', '$estado', '$cidade', '$tipo')";
        $insert = mysqli_query($connect, $query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Aluno cadastrado com sucesso!');window.location.href='funcionario.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse aluno');window.location.href='CadastroAluno.html'</script>";
        }
      }
    }
?>
    </body>
</html>
