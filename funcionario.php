<?php include ('pagina/cabecalhoFuncionario.php');?>
	
	<div class="banner-bottom-icons">
		<div class="container">
			<div class="w3l-heading">
				<h2 class="w3ls_head"><?php 
                                $nome_cookie = $_COOKIE['nome'];
                                    if(isset($nome_cookie)){
                                      echo"Bem-Vindo, $nome_cookie <br>";
                                      }?></h2>
			</div>
		<div class="col-md-4 w3_banner_bottom_icons_left hover15">
			<div class="w3_agile_banner_bottom">
				<figure><img src="images/13.png" alt=" " class="img-responsive" /></figure>
			</div>
		</div>
		<div class="col-md-8 w3_banner_bottom_icons_right">
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
                                    <a href="listaAgenda.php"><i class="fa-car"></i></a>
					<h3>Aulas</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
                            
                            <div class="w3_banner_bottom_icons1_effect">
					<a href="agenda.php"><i class="far fa-clock"></i></a>
					<h3>Horários</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
                            </div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
					<a href="relatorio.php"><i class="fa fa-support"></i></a>
					<h3>Relatório de Aula</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
					<i class=" fa fa-bookmark"></i>
					<h3>Exames</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
                    <div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
                                    <a href="AlunoOpcoes.php"><i class="fa fa-user-plus"></i></a>
					<h3>Alunos</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
                                    <a href="Funcionarioopcoes.php"><i class="fa fa-user-plus"></i></a>
                                    
					<h3>Instrutores</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
                    
                    
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	
</div> 

	<?php include ('pagina/rodape.php');?>