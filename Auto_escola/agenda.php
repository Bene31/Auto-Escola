<?php
    include("cabecalhoFuncionario.php");
    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
?>

<div class="w3l-heading">
            <h2 class="w3ls_head">Agendamento de Aula</h2>
	</div>
         <div class="register">
		<div class="container">               
        <div class ="col-md-6 w3layouts_register_right">
           
        <form method="POST" action="agendacon.php">
            <h4 id="h4.-bootstrap-heading">Opção de aula 
                <select size="1" name="aula" id="aula" required="required">
                    <option>Carro</option>
                    <option>Moto</option>
                    <option>Outros</option>
                </select>
            </h4><br>
            <h4 id="h4.-bootstrap-heading">Professor
                <select name="professor" id="professor"> 
                    <option value="professor">Selecione o Professor</option> 
                        <?php
                            $sql = "select id, nome from funcionario where funcao = 'professor de carros'";
                            $result = $connect->query($sql);
                            while ($row = $result->fetch_array()){?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['nome']?></option><?php
                            }
                        ?>
                </select>
            </h4><br>
            
            <h4 id="h4.-bootstrap-heading">Aluno
                <select name="aluno" id="aluno"> 
                    <option value="aluno">Selecione o Aluno</option> 
                        <?php
                            $sql = "select id, nome_aluno from aluno";
                            $result = $connect->query($sql);
                            while ($row = $result->fetch_array()){?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['nome_aluno']?></option><?php
                            }
                        ?>
                </select>
            </h4><br>
                        
            <h4 id="h4.-bootstrap-heading">Data da Aula: <input type="date" name="data_aula" id="data_aula" required min="2017-01-01" max='2025-12-31'></h4><br>
            <h4 id="h4.-bootstrap-heading">Horario da Aula:
                <select name="hora" id="hora"> 
                    <option value="hora">Selecione a Hora</option> 
                        <?php
                            $sql = "select id, hora from horario";
                            $result = $connect->query($sql);
                            while ($row = $result->fetch_array()){?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['hora']?></option><?php
                            }
                        ?>
                </select>
            </h4><br>
            
            <h4 id="h4.-bootstrap-heading"><input type="submit" value="Agendar" id="agendar" name="agendar"></h4>
        
        </form>
            </div>
                    <div class="col-md-6 w3layouts_register_left">
                        <h1><img src="images/logo.png" alt=" " class="img-responsive"><br></h1>
				<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida. 
					Ut suscipit orci sem, eget lobortis sem dictum eu. Etiam congue ex sed volutpat fringilla.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
    </body>
</html>
<?php
    include("rodape.php");
?>
