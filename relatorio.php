<?php
    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
    include("pagina/cabecalhoFuncionario.php");
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title>Lista de Funcionários</title>
    </head>
    <body>
        <center>
            <div>
                <h2 class="w3ls_head">Relatório de Aulas</h2><br>
               
                <?php
                    $sql = "SELECT count(id), count(distinct id_aluno) FROM agenda";
                    $result = $connect->query($sql);

                    while ($row = $result->fetch_array()){
		?>
                
                <label class = "alert alert-warning">TOTAL DE <?php echo $row["count(id)"];?> AULAS E DE 
                 <?php echo $row["count(distinct id_aluno)"];?> ALUNOS </label> <BR>
                 
                 
                
                <?php 		
                    }
                    $sql1 = "SELECT f.nome, count(a.id) tot, count(distinct id_aluno) totalu FROM agenda a inner join funcionario f on f.id = a.id_motorista "
                            . " group by f.nome";
                    //$sql1 = "SELECT count(id), count(distinct id_aluno) FROM agenda where id_motorista=5";
                    $resulto = $connect->query($sql1);

                    while ($row1 = $resulto->fetch_array()){
		?>
                 
                 
                            
               
            </div>
            
         
                <table class = "table table-bordered" border="1">
                    <tr>
                      <th class = "alert alert-warning">NOME</th>
                       <th class = "alert alert-warning">TOTAL DE AULAS</th>
                        <th class = "alert alert-warning">TOTAL DE ALUNOS</th>
                       
                    </tr>
                  
                     
                                <td>  <?php echo $row1["nome"];?></td>
                                <td><?php echo $row1["tot"];?></td>
                                <td><?php echo $row1["totalu"];?></td>
                                
                                
                            
                    <?php 		
                    }  
                    $connect->close();
                    ?>
                 
                </table>
        </center>    
    <?php
        include("pagina/rodape.php");
    ?>

    
<!--
select count(id) from agenda where id_motorista=?;
select count(distinct id_aluno) from agenda where id_motorista=?;
-->