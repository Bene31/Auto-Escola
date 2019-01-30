<?php
    include("pagina/cabecalhoFuncionario.php");
    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
?>                        
		

	
	<div class="w3l-heading">
            <h2 class="w3ls_head">Edição de Alunos</h2>
	</div>
         <div class="register">
		<div class="container">               
        <div class ="col-md-6 w3layouts_register_right">
           
            <form method="POST" action="EditarAlunocon.php">
           <?php
                    $sql = "SELECT id, nome_aluno, cpf, rg, date_format(nasc, '%Y-%m-%d') dt, sexo, telefone, celular, email, rua,"
                            . "bairro, numero, complemento, cep, estado, cidade, tipo FROM aluno where id='".$_GET['id']."'";
                    $result = $connect->query($sql);

                    while ($row = $result->fetch_array()){
		?>
            <h3>Dados Pessoais</h3><br>
            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
            <h4 id="h4.-bootstrap-heading">Nome: <input type="text" name="nome" id="nome" required="required" value="<?php echo $row["nome_aluno"];?>"></h4><br>
            <h4 id="h4.-bootstrap-heading">CPF:<input type="text" name="cpf"  id="cpf" required="required" onkeypress="return SomenteNumero(event) && mascara(this, '###.###.###-##')" value=" <?php echo $row["cpf"]; ?>" maxlength="14"></h4><br>
            <h4 id="h4.-bootstrap-heading">RG: <input type="text" name="rg" id="rg" required="required" value="<?php echo $row["rg"]; ?>"  onkeypress="return SomenteNumero(event) && mascara(this, '##.###.###')" maxlength="10"></h4><br>
            <h4 id="h4.-bootstrap-heading">Data Nascimento: <input type="date" name="nasc" id="nasc" required max="2000-12-31" value="<?php echo $row["dt"]; ?>"></h4><br>
            <h4 id="h4.-bootstrap-heading">Sexo: 
                <input type="radio" name="sexo" id="sexo" value="Masculino" checked align = "center">Masculino 
                <input type="radio" name="sexo" id="sexo" value="Feminino" align = "center">Feminino<br>
            </h4><br>
                     
                 <h3>Informações de Contato</h3><br>
                 <br><h4 id="h4.-bootstrap-heading">Telefone: <input type="text" name="telefone" id="telefone" value=" <?php echo $row["telefone"]; ?>" onkeypress="return SomenteNumero(event) && mascara(this, '## ####-####')" maxlength="12"></h4><br>
                 <br><h4 id="h4.-bootstrap-heading">Celular: <input type="text" name="celular" id="celular" value="<?php echo $row["celular"]; ?>" required="required" onkeypress="return SomenteNumero(event) && mascara(this, '## #####-####')" maxlength="13"></h4><br>
                    <br><h4 id="h4.-bootstrap-heading">Email: <input type="email" id="email" value="<?php echo $row["email"]; ?>" required="required" class="input-text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/></h4><br>
               
                    <h3> Dados de Endereçamento </h3><br>
                    <h4 id="h4.-bootstrap-heading">Rua: <input type="text" name="rua" id="rua" value="<?php echo $row["rua"]; ?>" required="required"></h4><br>
                    <h4 id="h4.-bootstrap-heading">Bairro: <input type="text" name="bairro" id="bairro" value="<?php echo $row["bairro"]; ?>" required="required"></h4><br>
                    <h4 id="h4.-bootstrap-heading">Número: <input type="text" name="numero" id="numero" value="<?php echo $row["numero"]; ?>" required="required"></h4><br>
                    <h4 id="h4.-bootstrap-heading">Complemento: <input type="text" name="complemento" id="complemento" value="<?php echo $row["complemento"]; ?>"></h4><br>
                    <h4 id="h4.-bootstrap-heading">CEP: <input type="text" name="cep" id="cep" value="<?php echo $row["cep"]; ?>" required="required" onkeypress="return SomenteNumero(event) && mascara(this, '#####-###')" maxlength="9"></h4><br>
                    <h4 id="h4.-bootstrap-heading">Estado
                        <select name="estado" id="estado" > 
                            <option value="estado"><?php echo $row["estado"]; ?></option> 
                            <option value="AC">Acre</option> 
                            <option value="AL">Alagoas</option> 
                            <option value="AM">Amazonas</option> 
                            <option value="AP">Amapá</option> 
                            <option value="BA">Bahia</option> 
                            <option value="CE">Ceará</option> 
                            <option value="DF">Distrito Federal</option> 
                            <option value="ES">Espírito Santo</option> 
                            <option value="GO">Goiás</option> 
                            <option value="MA">Maranhão</option> 
                            <option value="MT">Mato Grosso</option> 
                            <option value="MS">Mato Grosso do Sul</option> 
                            <option value="MG">Minas Gerais</option> 
                            <option value="PA">Pará</option> 
                            <option value="PB">Paraíba</option> 
                            <option value="PR">Paraná</option> 
                            <option value="PE">Pernambuco</option> 
                            <option value="PI">Piauí</option> 
                            <option value="RJ">Rio de Janeiro</option> 
                            <option value="RN">Rio Grande do Norte</option> 
                            <option value="RO">Rondônia</option> 
                            <option value="RS">Rio Grande do Sul</option> 
                            <option value="RR">Roraima</option> 
                            <option value="SC">Santa Catarina</option> 
                            <option value="SE">Sergipe</option> 
                            <option value="SP">São Paulo</option> 
                            <option value="TO">Tocantins</option> 
                        </select></h4><br>
                        <h4 id="h4.-bootstrap-heading">Cidade: <input type="text" name="cidade" id="cidade" value="<?php echo $row["cidade"]; ?>" required="required" ></h4><br>
                
                    <h3> Dados da Habilitação </h3><br>
                        <h4 id="h4.-bootstrap-heading">Tipo: 
                        <select size="1" name="tipo" id="tipo">
                            <option><?php echo $row["tipo"]; ?></option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                        </select>
                    </h4>
                             
                <h4 id="h4.-bootstrap-heading"><input type="submit" value="Editar" id="editar" name="editar"></h4>
                <?php 		
                    }
                    $connect->close();
		?>
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
