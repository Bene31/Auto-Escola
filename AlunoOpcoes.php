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
                                    <a href="CadastroAluno.html"><i class="fa fa-user-plus"></i></a>
					<h3>Alunos</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
                                    <a href="listaAluno.php"><i class="fa fa-user-plus"></i></a>
                                    
					<h3>Lista</h3>
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