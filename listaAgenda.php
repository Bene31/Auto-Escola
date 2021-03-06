<?php
    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
    include ('pagina/cabecalhoFuncionario.php');
    $nome_cookie = $_COOKIE['nome'];
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title>Horários Marcados</title>
    </head>
    <body>
        <center>
	<div>
            <h2 class="w3ls_head">Horários Marcados</h2><br>
            <table class = "table table-bordered" border="1">
		<tr>
                    <th class = "alert alert-warning">ID</th>
		    <th class = "alert alert-warning">CATEGORIA</th>
            	    <th class = "alert alert-warning">PROFESSOR</th>
                    <th class = "alert alert-warning">ALUNO</th>
		    <th class = "alert alert-warning">DATA DA AULA</th>
            	    <th class = "alert alert-warning">HORÁRIO</th>
                </tr>
		<?php
                    $sql = "select a.id, a.aula, f.nome, al.nome_aluno, date_format(a.data_aula, '%d-%m-%Y'), h.hora from funcionario f "
                            . "inner join agenda a on f.id = a.id_motorista inner join aluno al on al.id = a.id_aluno inner join horario h "
                            . "on h.id = a.id_hora where f.nome = '$nome_cookie' order by a.data_aula, h.hora;";
                    $result = $connect->query($sql);

                    while ($row = $result->fetch_array()){
		?>
                        <tr>
                            <td class = "hdg"> <?php echo $row["id"]; ?></td>
                            <td><?php echo $row["aula"]; ?></td>
                            <td><?php echo $row["nome"]; ?></td>
                            <td> <?php echo $row["nome_aluno"]; ?></td>
                            <td><?php echo $row["date_format(a.data_aula, '%d-%m-%Y')"]; ?></td>
                            <td><?php echo $row["hora"]; ?></td>
                        </tr>
		<?php 		
                    }
                    $connect->close();
		?>
            </table>
	</div>
            </center>
    
<?php
        include('pagina/rodape.php');
?>