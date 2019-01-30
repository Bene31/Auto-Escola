<?php
    include ("pagina/cabecalhoFuncionario.php");
    $connect = mysqli_connect('localhost:3307','root','');
    $db = mysqli_select_db($connect, 'grupo2');
?>                        
	

	
	<div class="w3l-heading">
            <h2 class="w3ls_head">Cadastro de Funcionarios</h2>
	</div>
         <div class="register">
		<div class="container">               
        <div class ="col-md-6 w3layouts_register_right">
           
        <form method="POST" action="editarFuncionariocon.php">
           <?php
                    $sql = "SELECT id, nome, cpf, rg, date_format(nasc, '%Y-%m-%d') dt, sexo, telefone, celular, email, rua,"
                            . "bairro, numero, complemento, cep, estado, cidade, placa, funcao, senha FROM funcionario where id='".$_GET['id']."'";
                    $result = $connect->query($sql);//alterar where

                    while ($row = $result->fetch_array()){
		?>
            <h3 class="hdg">Dados Pessoais</h3><br>
            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
            <h4 id="h4.-bootstrap-heading">Nome:<br> <input type="text" name="nome" id="nome" required="required" value="<?php echo $row["nome"];?>"></h4><br>
            <h4 id="h4.-bootstrap-heading">CPF: <br><input type="text" name="cpf"  id="cpf" required="required" value="<?php echo $row["cpf"];?>" onkeypress="return SomenteNumero(event) && mascara(this, '###.###.###-##')" maxlength="14"></h4><br>
            <h4 id="h4.-bootstrap-heading">RG:<br> <input type="text" name="rg" id="rg" required="required" value="<?php echo $row["rg"];?>" onkeypress="return SomenteNumero(event) && mascara(this, '##.###.###')" maxlength="10"></h4><br>
            <h4 id="h4.-bootstrap-heading">Data Nascimento:<br><br> <input type="date" name="nasc" id="nasc" value="<?php echo $row["dt"];?>" required max="2000-12-31"></h4><br>
            <h4 id="h4.-bootstrap-heading">Sexo: <br><br>
                <input type="radio" name="sexo" id="sexo" value="Masculino" checked align = "center">Masculino 
                <input type="radio" name="sexo" id="sexo" value="Feminino" align = "center">Feminino<br>
            </h4><br>
                     
                 <h3 class="hdg">Informações de Contato</h3><br>
                    <br><h4 id="h4.-bootstrap-heading">Telefone: <br><input type="text" name="telefone" id="telefone" value="<?php echo $row["telefone"];?>" onkeypress="return SomenteNumero(event) && mascara(this, '## ####-####')" maxlength="12"></h4><br>
                    <br><h4 id="h4.-bootstrap-heading">Celular:<br> <input type="text" name="celular" id="celular" value="<?php echo $row["celular"];?>" required="required" onkeypress="return SomenteNumero(event) && mascara(this, '## #####-####')" maxlength="13"></h4><br>
                    <br><h4 id="h4.-bootstrap-heading">Email: <br><input type="email" id="email" value="<?php echo $row["email"];?>" required="required" class="input-text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/></h4><br>
               
                    <h3 class="hdg"> Dados de Endereçamento </h3><br>
                    <h4 id="h4.-bootstrap-heading">Rua<br><input type="text" name="rua" id="rua" value="<?php echo $row["rua"];?>" required="required"></h4><br>
                    <h4 id="h4.-bootstrap-heading">Bairro<br><input type="text" name="bairro" id="bairro" value="<?php echo $row["bairro"];?>" required="required"></h4><br>
                    <h4 id="h4.-bootstrap-heading">Número<br><input type="text" name="numero" id="numero" value="<?php echo $row["numero"];?>" required="required"></h4><br>
                    <h4 id="h4.-bootstrap-heading">Complemento<br><input type="text" name="complemento" id="complemento" value="<?php echo $row["complemento"];?>"></h4><br>
                    <h4 id="h4.-bootstrap-heading">CEP<br><input type="text" name="cep" id="cep" required="required" value="<?php echo $row["cep"];?>" onkeypress="return SomenteNumero(event) && mascara(this, '#####-###')" maxlength="9"></h4><br>
                    <h4 id="h4.-bootstrap-heading">Estado<br><br>
                        <select name="estado" id="estado"> 
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
                    <h4 id="h4.-bootstrap-heading">Cidade<br><input type="text" name="cidade" id="cidade" value="<?php echo $row["cidade"]; ?>" required="required"></h4><br>
                
                    <h4 class="hdg"> Dados da Habilitação </h4><br>
                        <h4 id="h4.-bootstrap-heading">Placa <br><input type="text" name="placa"  id="placa" value="<?php echo $row["placa"];?>" onkeypress="return mascara(this, '###-####')" maxlength="8"></h4><br>
                        <h4 id="h4.-bootstrap-heading">Função<br> <br>
                            <select size="1" name="funcao" id="funcao">
                                <option><?php echo $row["funcao"];?></option>
                                <option>Atendente</option>
                                <option>Professor de Leis</option>
                                <option>Professor de Carros</option>
                            </select>
                        </h4><br>
                        <h4 id="h4.-bootstrap-heading">Senha<br><br><input type="password" name="senha" id="senha" required="required" maxlength="32"></h4><br>
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
