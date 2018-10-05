<?php
    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
    include ('cabecalho.php');
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
            <h1>Horários Marcados</h1><br>
            <table border="1">
		<tr>
                    <th>ID</th>
		    <th>AULA</th>
            	    <th>PROFESSOR</th>
                    <th>ALUNO</th>
		    <th>Data AULA</th>
            	    <th>HORARIO</th>
                </tr>
		<?php
                    $sql = "select a.id, a.aula, f.nome, al.nome_aluno, a.data_aula, h.hora from funcionario f inner join agenda a on f.id = a.id_motorista inner join aluno al on al.id = a.id_aluno inner join horario h on h.id = a.id_hora;";
                    $result = $connect->query($sql);

                    while ($row = $result->fetch_array()){
		?>
                        <tr>
                            <td> <?php echo $row["id"]; ?></td>
                            <td><?php echo $row["aula"]; ?></td>
                            <td><?php echo $row["nome"]; ?></td>
                            <td> <?php echo $row["nome_aluno"]; ?></td>
                            <td><?php echo $row["data_aula"]; ?></td>
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
        include('rodape.php');
?>