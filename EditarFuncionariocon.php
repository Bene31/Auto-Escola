<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
              <?php 

$id = $_POST['id'];              
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

$connect = mysqli_connect('localhost:3307','root','');
$db = mysqli_select_db($connect, 'grupo2');
$query_select = "SELECT cpf FROM funcionario WHERE cpf = '$cpf'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['cpf'];
 
  if($cpf == "" || $cpf == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo cadastro deve ser preenchido');window.location.href='EditarFuncionario.php';</script>";
 
    }else{
        $query = "update funcionario set nome='$nome', cpf='$cpf', rg='$rg', nasc='$nasc', sexo='$sexo', telefone='$telefone', celular='$celular', email='$email', rua='$rua', bairro='$bairro', numero='$numero', complemento='$complemento', cep='$cep', estado='$estado', cidade='$cidade', placa='$placa', funcao='$funcao' where id='$id'";//alterar where
        $update = mysqli_query($connect, $query);
         
        if($update){
          echo"<script language='javascript' type='text/javascript'>alert('Funcionario editado com sucesso!');window.location.href='listaFuncionario.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível editar esse funcionario');window.location.href='EditarFuncionario.php'</script>";
        }
    }
?>
    </body>
</html>
