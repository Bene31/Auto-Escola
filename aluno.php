<?php
    include('pagina/cabecalhoAluno.php');
?>	
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
                                    <a href="listaAula.php"><i class="fa-car"></i></a>
					<h3>Aulas</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
                            
                            <div class="w3_banner_bottom_icons1_effect">
					<i class="far fa-clock"></i>
					<h3>Horários</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
                            </div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
					<i class="fa fa-support"></i>
					<h3>Simulador</h3>
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
                   
	
                    
                    
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	
	<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Endereço</h4>
					</div>
					<div class="footer-grid-info">
						<p>Auto Escola AutoCar
							<span>Rua Medeiros Maré,Exemplo, Número 56.</span>
						</p>
						<p class="phone">Phone :(32) 3232 - 3232
							<span>Email : <a href="mailto:exemplo@email.com">exemplo@email.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navegação</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="index.html">Página Inicial</a></li>
							<li><a href="lessons.html">Aulas</a></li>
							<li><a href="about.html">Sobre</a></li>
							<li><a href="mail.html">Contato</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h6>Sempre guiando você para o caminho certo!</h6>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<h1><a href="index.html"><img src="images/logo.png" alt=" " class="img-responsive"/><br></a></h1>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p> CENTRO DE ENSINO SUPERIOR DE JUIZ DE FORA - DESENVOLVIDO PARA A DISCIPLINA DE PROJETOS 2 E PROJETOS 3. </p>
			</div>
		</div>
	</div>
	
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script src="js/bootstrap.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

</body>
</html>