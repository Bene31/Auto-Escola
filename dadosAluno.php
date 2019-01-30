<?php
    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
    include ('pagina/cabecalhoFuncionario.php');
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title>Dados Completos</title>
    </head>
    <body>
        <center>
	<div>
            <h2 class="w3ls_head">Dados Completos</h2><br>
            <form method="POST" id="my_form"></form>
            <table class = "table table-bordered" border="1">
		<tr>
                    <th class = "alert alert-warning">ID</th>
		    <th class = "alert alert-warning">NOME</th>
            	    <th class = "alert alert-warning">CPF</th>
                    <th class = "alert alert-warning">RG</th>
		    <th class = "alert alert-warning">DATA DE NASCIMENTO</th>
            	    <th class = "alert alert-warning">SEXO</th>
                    <th class = "alert alert-warning">TELEFONE</th>
		    <th class = "alert alert-warning">CELULAR</th>
            	    <th class = "alert alert-warning">EMAIL</th>
                    <th class = "alert alert-warning">RUA</th>
		    <th class = "alert alert-warning">BAIRRO</th>
            	   </tr>
                <?php
                    $sql = "SELECT id, nome_aluno, cpf, rg, date_format(nasc, '%d-%m-%Y'), sexo, telefone, celular, email, rua,"
                            . "bairro, numero, complemento, cep, estado, cidade, tipo FROM aluno where id='".$_GET['id']."'";
                    $result = $connect->query($sql);

                    while ($row = $result->fetch_array()){
		?>
                  <tr>
                            <td><?php echo mb_strtoupper($row["id"]); ?></td>
                            <td><?php echo mb_strtoupper($row["nome_aluno"]); ?></td>
                            <td><?php echo $row["cpf"]; ?></td>
                            <td><?php echo $row["rg"]; ?></td>
                            <td><?php echo $row["date_format(nasc, '%d-%m-%Y')"]; ?></td>
                            <td><?php echo mb_strtoupper($row["sexo"]); ?></td>
                            <td><?php echo $row["telefone"]; ?></td>
                            <td><?php echo $row["celular"]; ?></td>
                            <td><?php echo mb_strtoupper($row["email"]); ?></td>
                            <td> <?php echo mb_strtoupper($row["rua"]); ?></td>
                            <td><?php echo mb_strtoupper($row["bairro"]); ?></td>
                        </tr>
                <tr>
                  
            	    <th class = "alert alert-warning">NUMERO</th>
                    <th class = "alert alert-warning">COMPLEMENTO</th>
		    <th class = "alert alert-warning">CEP</th>
            	    <th class = "alert alert-warning">ESTADO</th>
                    <th class = "alert alert-warning">CIDADE</th>
		    <th class = "alert alert-warning">TIPO</th>
                    <th class = "alert alert-warning">EDITAR</th>
                    <th class = "alert alert-warning">EXCLUIR</th>
                </tr>
		
                      
                        <tr>
                          
                            <td><?php echo $row["numero"]; ?></td>
                            <td><?php echo mb_strtoupper($row["complemento"]); ?></td>
                            <td><?php echo $row["cep"]; ?></td>
                            <td><?php echo $row["estado"]; ?></td>
                            <td><?php echo mb_strtoupper($row["cidade"]); ?></td>
                            <td><?php echo $row["tipo"]; ?></td>
                            <td><?php echo"<a href='editarAluno.php?id=".$row["id"]."'><img src='images/editar.png'></img></a>";?></td>
                            <td><?php echo"<a href='excluirAluno.php?id=".$row["id"]."'><img src='images/cancelar.png'></img></a>";?></td>
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