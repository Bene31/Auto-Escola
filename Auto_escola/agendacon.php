<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
              <?php 
 
$aula = $_POST['aula'];
$professor = $_POST['professor'];
$aluno = $_POST['aluno'];
$data_aula = $_POST['data_aula'];
$hora = $_POST['hora'];

$connect = mysqli_connect('localhost:3307','root','');
$db = mysqli_select_db($connect, 'grupo2');
$query_select = "SELECT id FROM agenda WHERE aula = '$aula'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['aula'];
 
  if($data_aula == "" || $data_aula == null){
    echo"<script language='javascript' type='text/javascript'>alert('Os campos devem ser preenchidos');window.location.href='agenda.php';</script>";
 
    }else{
      if($logarray == $data_aula){
 
        echo"<script language='javascript' type='text/javascript'>alert('Essa aula já existe');window.location.href='agenda.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO agenda (aula, id_motorista, id_aluno, data_aula, id_hora) VALUES ('$aula', '$professor', '$aluno', '$data_aula', '$hora')";
        $insert = mysqli_query($connect, $query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Aula agendada com sucesso!');window.location.href='funcionario.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível agendar essa aula');window.location.href='agenda.php'</script>";
        }
      }
    }
?>
    </body>
</html>
