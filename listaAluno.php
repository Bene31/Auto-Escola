<?php
    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
    include ('pagina/cabecalhoFuncionario.php');
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
                <h2 class="w3ls_head">Lista de Alunos</h2><br>
                <form method="POST" id="my_form"></form>
                <table class = "table table-bordered" border="1">
                    <tr>
                        <th class = "alert alert-warning">ID</th>
                        <th class = "alert alert-warning">NOME</th>
                        <th class = "alert alert-warning">CPF</th>
                        <th class = "alert alert-warning">RG</th>
                        <th class = "alert alert-warning">DATA DE NASCIMENTO</th>
                        <th class = "alert alert-warning">CELULAR</th>
                        <th class = "alert alert-warning">EMAIL</th>
                        <th class = "alert alert-warning">DADOS</th>
                    </tr>
                    <?php
                        $sql = "SELECT id, nome_aluno, cpf, rg, date_format(nasc, '%d-%m-%Y'), sexo, telefone, celular, email, rua,"
                                . "bairro, numero, complemento, cep, estado, cidade, tipo FROM aluno";
                        $result = $connect->query($sql);

                        while ($row = $result->fetch_array()){
                    ?>
                            <tr>
                                <td> <?php echo $row["id"]; ?></td>
                                <td><?php echo $row["nome_aluno"]; ?></td>
                                <td><?php echo $row["cpf"]; ?></td>
                                <td> <?php echo $row["rg"]; ?></td>
                                <td><?php echo $row["date_format(nasc, '%d-%m-%Y')"]; ?></td>
                                <td><?php echo $row["celular"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo"<a href='dadosAluno.php?id=".$row["id"]."'><img src='images/Buscar.png'></img></a>";?></td>
                            </tr>
                    <?php 		
                        }
                        $connect->close();
                    ?>
                </table>
            </div>
        </center>
        <button><a href="funcionario.php">Voltar</a></button><br><br><br>
<?php
        include('pagina/rodape.php');
?>