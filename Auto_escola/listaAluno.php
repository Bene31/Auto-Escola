<?php
    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
    include ('cabecalho.php');
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title>Lista de Alunos</title>
    </head>
    <body>
        <center>
	<div>
            <h1>Lista de Alunos</h1><br>
            <table border="1">
		<tr>
                    <th>ID</th>
		    <th>Nome</th>
            	    <th>CPF</th>
                    <th>RG</th>
		    <th>Data Nascimento</th>
            	    <th>Sexo</th>
                    <th>Telefone</th>
		    <th>Celular</th>
            	    <th>Email</th>
                    <th>Rua</th>
		    <th>Bairro</th>
            	    <th>Numero</th>
                    <th>Complemento</th>
		    <th>CEP</th>
            	    <th>Estado</th>
                    <th>Cidade</th>
		    <th>Tipo</th>
                </tr>
		<?php
                    $sql = "SELECT * FROM aluno";
                    $result = $connect->query($sql);

                    while ($row = $result->fetch_array()){
		?>
                        <tr>
                            <td> <?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nome_aluno"]; ?></td>
                            <td><?php echo $row["cpf"]; ?></td>
                            <td> <?php echo $row["rg"]; ?></td>
                            <td><?php echo $row["nasc"]; ?></td>
                            <td><?php echo $row["sexo"]; ?></td>
                            <td> <?php echo $row["telefone"]; ?></td>
                            <td><?php echo $row["celular"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td> <?php echo $row["rua"]; ?></td>
                            <td><?php echo $row["bairro"]; ?></td>
                            <td><?php echo $row["numero"]; ?></td>
                            <td> <?php echo $row["complemento"]; ?></td>
                            <td><?php echo $row["cep"]; ?></td>
                            <td><?php echo $row["estado"]; ?></td>
                            <td> <?php echo $row["cidade"]; ?></td>
                            <td><?php echo $row["tipo"]; ?></td>
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